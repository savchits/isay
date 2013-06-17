<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Index extends Controller_Base {

	public function before()
{
	
	parent::before();

$this->template->scripts=array('MEDIA/JS/jquery-1.3.2.min.js','MEDIA/Bootstrap/js/bootstrap.min.js','MEDIA/JS/jqueryslidemenu.js');
$this->template->styles=array('MEDIA/CSS/style.css','MEDIA/CSS/specialprofilecss.css','MEDIA/CSS/votingblock.css','MEDIA/CSS/jqueryslidemenu.css','MEDIA/Bootstrap/css/bootstrap.min.css');
   if ($this->auth->logged_in('admin')) {
          Controller::redirect('indexadmin');
        }
}

	public function action_index() { 
	
$url=$this->request->param('id');

 if (isset($url)){
     
$a=ORM::factory('countrie')
->where('url','=',$url)
->find();
 
$content=View::factory('v_mainblock', array('mainblock'=>$a));
$this->template->mainblock=$content;

	$b=ORM::factory('ad')
->where('id','=', 7)
->find();

$images=$b->adimages->find_all();
$ads=$a->ads->find_all();
	
$block_left = View::factory('v_worldads', array('worldads' => $ads,));
$this->template->block_left = array($block_left);

	

$worldnews=$a->news->find_all();
	
$block_right = View::factory('v_worldnews', array('worldnews' => $worldnews, 'images' => $images));
$this->template->block_right = array($block_right);
	
		

 
$votingblock=View::factory('v_votingblock', array('mainblock'=>$a));
$this->template->votingblock=array($votingblock);
}

 else
     
{
     
$a=ORM::factory('countrie')
->where('url','=','index')
->find();
 
$content=View::factory('v_mainblock', array('mainblock'=>$a));
$this->template->mainblock=$content;

	$b=ORM::factory('ad')
->where('id','=', 7)
->find();

$images=$b->adimages->find_all();
$ads=$a->ads->find_all();
	
$block_left = View::factory('v_worldads', array('worldads' => $ads, 'images' => $images));
$this->template->block_left = array($block_left);

	

$worldnews=$a->news->find_all();
	

$block_right = View::factory('v_worldnews', array('worldnews' => $worldnews));
$this->template->block_right = array($block_right);
	
		$votingblock=View::factory('v_votingblock', array('mainblock'=>$a));
$this->template->votingblock=array($votingblock);	
     
     
 };
 

	}
        
        
        
        
        

}