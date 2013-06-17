<?php defined('SYSPATH') or die('No direct script access.');
/*
 * Личный кабинет
 */
class Controller_Account extends Controller_Baseforprofile {

    public function before(){
        parent::before();
        if (!$this->auth->logged_in()) {
             Controller::redirect('auth');

        }
        $this->template->scripts=array('MEDIA/JS/jquery-1.3.2.min.js','MEDIA/Bootstrap/js/bootstrap.min.js','MEDIA/JS/jqueryslidemenu.js');
$this->template->styles=array('MEDIA/CSS/style.css','MEDIA/CSS/specialprofilecss.css','MEDIA/CSS/votingblock.css','MEDIA/CSS/jqueryslidemenu.css','MEDIA/Bootstrap/css/bootstrap.min.css');

    }

    public function action_index() {
        $a=ORM::factory('user')
                
             ->where('id', '=', $this->user->id)
              ->find();
        
 
$content=View::factory('v_mainblockprofile', array('mainblock'=>$a));
$this->template->mainblock=$content;
    }

 




}