<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Authbase extends Controller_Basefirst
{
    protected $user;
    protected $auth;
	

 public $template='v_autbase';


	public function before()
	{
	
	
parent::before();
$auth = Auth::instance();
$logged_in = $auth->logged_in('login');

$this->template->logged_in = $logged_in;

$this->auth = Auth::instance();
$this->user = $this->auth->get_user();




  
	$this->template->mainblock = null;
$this->template->centerblock = null;

$this->template->scripts=array('MEDIA/JS/jquery-1.3.2.min.js','MEDIA/Bootstrap/js/bootstrap.min.js','MEDIA/JS/jqueryslidemenu.js');
$this->template->styles=array('MEDIA/CSS/style.css','MEDIA/CSS/specialprofilecss.css','MEDIA/CSS/votingblock.css','MEDIA/CSS/jqueryslidemenu.css','MEDIA/Bootstrap/css/bootstrap.min.css');

		
	}

} 
