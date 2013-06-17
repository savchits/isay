<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Basefirst extends Controller_Template
{
    protected $user;
    protected $auth;
	




	public function before()
	{
	
parent::before();
$auth = Auth::instance();
$logged_in = $auth->logged_in('login');

$this->template->logged_in = $logged_in;

$this->auth = Auth::instance();
$this->user = $this->auth->get_user();
                     
        


	
	
        

       
	
 


	

		


	}

} 
