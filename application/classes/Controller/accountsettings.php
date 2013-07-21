
<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Accountsettings extends Controller_Settingsbase {
    
    
    
	public function before()
	{
	
	parent::before();
	$auth = Auth::instance();
        $logged_in = $auth->logged_in('login');


        $this->template->logged_in = $logged_in;

	    
        $this->auth = Auth::instance();
	$this->user = $this->auth->get_user();
                     
                     
   

	}

        
        
        
        
            
    
      public function action_profile() {
        if (isset($_POST['submit'])) {
                    $users = ORM::factory('user');

                    try {
                        $users->where('id', '=', $this->user->id)
                                ->find()
                                ->update_user($_POST, array(
                                    'username',
                                    'first_name',
                                    'email',
                                    'aboutuser',
      ));
      Controller::redirect('account/index');
                    }
                    catch (ORM_Validation_Exception $e) {
                        $errors = $e->errors('auth');
                        echo 'ERROR';
                    }
                }


           $a=ORM::factory('user')
                
             ->where('id', '=', $this->user->id)
             ->find();
        
        
   $imgloading = View::factory('v_profileimgloading', array('centerblock'=>$a))
   ->bind('user', $this->user)
   ->bind('errors', $errors)
  ;


   $this->template->centerblock = $imgloading;
   
   $d = View::factory('v_settings')
   ->bind('user', $this->user)
   ->bind('errors', $errors)
     ;


   $this->template->mainblock= $d;
   

   

   
   
   
   
   
    }
        
        
        
        
        	   public function _upload_img($file, $ext = NULL, $directory = NULL){

        if($directory == NULL)
        {
            $directory = 'media/uploads';
        }

        if($ext== NULL)
        {
            $ext= 'jpg';
        }

        // Генерируем случайное название
        $symbols = '0123456789abcdefghijklmnopqrstuvwxyz';

        $filename = '';
        for($i = 0; $i < 30; $i++)
        {
            $filename .= rand(1, strlen($symbols));
        }

        // Изменение размера и загрузка изображения
        $im = Image::factory($file);

        if($im->width > 191)
        {
            $im->resize(191);
        }
        $im->save("$directory/small_$filename.$ext");

        $im = Image::factory($file);
        $im->save("$directory/$filename.$ext");

        return "$filename.$ext";
    }
    
    
    
    
    
    
    
    
    
    
    
    

        
	
	
	

}
