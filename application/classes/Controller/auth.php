
<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Auth extends Controller_Authbase {
    
    
    
	public function before()
	{
	
	parent::before();
	$auth = Auth::instance();
        $logged_in = $auth->logged_in('login');


        $this->template->logged_in = $logged_in;

	    
		  $this->auth = Auth::instance();
		     $this->user = $this->auth->get_user();
                     
                     
        

	
	

		


	}
    public function action_index() {
	
$this->action_login();
    }

    public function action_login() {
	
        if(Auth::instance()->logged_in()) {
            
        }

        if (isset($_POST['submit'])){
            $data = Arr::extract($_POST, array('username', 'password', 'remember'));
            $status = Auth::instance()->login($data['username'], $data['password'], (bool) $data['remember']);

            if ($status){
			 if(Auth::instance()->logged_in('admin')) {
             Controller::redirect('indexadmin');
        }
			
			
                  	 if(Auth::instance()->logged_in('login')) {
             Controller::redirect('account');
        }
            }
            else {
                $errors = array(Kohana::message('auth/user', 'no_user'));
            }
        }

        $content = View::factory('v_authmainblock')
                    ->bind('errors', $errors)
                    ->bind('data', $data);

                 
                            
                            

           $this->template->mainblock = $content;
                 $content = View::factory('v_auth_register')
                            ->bind('errors', $errors)
                            ->bind('data', $data);

     
        $this->template->centerblock = $content;
       
    }
	
	    public function action_register() {

        if (isset($_POST['submit'])){
            $data = Arr::extract($_POST, array('username', 'password', 'first_name', 'password_confirm', 'email'));
            $users = ORM::factory('user');

       try {
				$users->values(array(
				'username' => $data['username'],
				'password' => $data['password'],
				'first_name' => $data['first_name'],
				'password_confirm' => $data['password_confirm'],
				'email' => $data['email'],
				));
				$users -> save();


                $role = ORM::factory('Role')->where('name', '=', 'login')->find();
	
                $users->add('roles', $role);
     
				
                $this->action_login();
               Controller::redirect('account');

            }
            catch (ORM_Validation_Exception $e) {
                $errors = $e->errors('auth');
            }
        }

        $content = View::factory('v_auth_register')
                            ->bind('errors', $errors)
                            ->bind('data', $data);

     
        $this->template->centerblock = $content;
           
    }
	
	
	
	
	
    public function action_logout() {
        if(Auth::instance()->logout()) {
              Controller::redirect('index');
        }
    }
}
