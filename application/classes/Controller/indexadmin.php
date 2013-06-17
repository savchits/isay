

<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Indexadmin extends Controller_Baseforadmin {

 
  public function  before() {
        parent::before();
        if (!$this->auth->logged_in('admin')) {
          Controller::redirect('auth');
        }
        
        
        $this->template->scripts=array('MEDIA/JS/jquery-1.3.2.min.js','MEDIA/Bootstrap/js/bootstrap.min.js','MEDIA/JS/jqueryslidemenu.js');
$this->template->styles=array('MEDIA/CSS/style.css','MEDIA/CSS/specialprofilecss.css','MEDIA/CSS/votingblock.css','MEDIA/CSS/jqueryslidemenu.css','MEDIA/Bootstrap/css/bootstrap.min.css');
		}

		
		public function action_index() { 
	
$url=$this->request->param('id');

 if (isset($url)){
     
$a=ORM::factory('countrie')
->where('url','=',$url)
->find();
 
$content=View::factory('v_adminmainblock', array('mainblock'=>$a));
$this->template->mainblock=$content;

	
$ads=$a->ads->find_all();

$b=ORM::factory('ad')
->where('id','=', 7)
->find();


$images=$b->adimages->find_all();

	
$block_left = View::factory('v_adminworldads', array('worldads' => $ads, 'images' => $images));
$this->template->block_left = array($block_left);



$worldnews=$a->news->find_all();
	
$block_right = View::factory('v_adminworldnews', array('worldnews' => $worldnews, 'images' => $images));
$this->template->block_right = array($block_right);
	
		

 
$votingblock=View::factory('v_votingblock', array('mainblock'=>$a));
$this->template->votingblock=array($votingblock);
}

 else
     
{
     
$a=ORM::factory('countrie')
->where('url','=','index')
->find();
 
$content=View::factory('v_adminmainblock', array('mainblock'=>$a));
$this->template->mainblock=$content;

$b=ORM::factory('ad')
->where('id','=', 7)
->find();

$images=$b->adimages->find_all();

$ads=$a->ads->find_all();


$block_left = View::factory('v_adminworldads', array('worldads' => $ads, 'images' => $images ));
$this->template->block_left = array($block_left);

	

$worldnews=$a->news->find_all();
	

$block_right = View::factory('v_adminworldnews', array('worldnews' => $worldnews, 'images' => $images));
$this->template->block_right = array($block_right);
	
		$votingblock=View::factory('v_votingblock', array('mainblock'=>$a));
$this->template->votingblock=array($votingblock);	
     
     
 };
 

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
	
	

	
	    public function action_deleteads() {
      
        $pages = ORM::factory('ad');

        if(!$pages->loaded()) {
               Controller::redirect('indexadmin');
        }

        $pages->delete();
               Controller::redirect('indexadmin');
               
               
         
    }
	
		    public function action_deletenews() {
        $id = (int) $this->request->param('id');
        $pages = ORM::factory('worldnew', $id);

        if(!$pages->loaded()) {
               Controller::redirect('indexadmin');
        }

        $pages->delete();
               Controller::redirect('indexadmin');
               
               
         
    }
	
	
    
    
    
    public function action_addnews() { 
                    

     
$a=ORM::factory('countrie')
->where('url','=','index')
->find();
 
$content=View::factory('v_adminmainblock', array('mainblock'=>$a));
$this->template->mainblock=$content;

$b=ORM::factory('ad')
->where('id','=', 7)
->find();

$images=$b->adimages->find_all();

$ads=$a->ads->find_all();


$block_left = View::factory('v_adminworldads', array('worldads' => $ads, 'images' => $images ));
$this->template->block_left = array($block_left);

	

$worldnews=$a->news->find_all();
	

$block_right = View::factory('v_adminworldnews', array('worldnews' => $worldnews, 'images' => $images));
$this->template->block_right = array($block_right);
	
		$votingblock=View::factory('v_votingblock', array('mainblock'=>$a));
$this->template->votingblock=array($votingblock);	




   if (isset($_POST['submit'])) {
       
            
       
            $data = Arr::extract($_POST, array('name', 'link', 'countrie_id', 'text'));
            $news = ORM::factory('worldnew');
            $news->values($data);

            try {
               
                $news->save();
                  Controller::redirect('index');
            }
            catch (ORM_Validation_Exception $e) {
                $errors = $e->errors('validation');
            }
      


   
   }
  

      $ads = View::factory('v_news_add')
                ->bind('errors', $errors)
                ->bind('data', $data);

      $this->template->block_right = array($ads);

   
      
      
   
      
      
      
      
      
            }
    
    
    
        public function action_addads() { 
                    

     
$a=ORM::factory('countrie')
->where('url','=','index')
->find();
 
$content=View::factory('v_adminmainblock', array('mainblock'=>$a));
$this->template->mainblock=$content;

$b=ORM::factory('ad')
->where('id','=', 7)
->find();

$images=$b->adimages->find_all();

$ads=$a->ads->find_all();


$block_left = View::factory('v_adminworldads', array('worldads' => $ads, 'images' => $images ));
$this->template->block_left = array($block_left);

	

$worldnews=$a->news->find_all();
	

$block_right = View::factory('v_adminworldnews', array('worldnews' => $worldnews, 'images' => $images));
$this->template->block_right = array($block_right);
	
		$votingblock=View::factory('v_votingblock', array('mainblock'=>$a));
$this->template->votingblock=array($votingblock);		
     
     




   if (isset($_POST['submit'])) {
       
            
       
            $data = Arr::extract($_POST, array('name', 'link', 'countrie_id' ));
            $news = ORM::factory('ad');
            $news->values($data);

            try {
               
                $news->save();
                 
                        // Работа с изображениями
                if (!empty($_FILES['images']['name'][0]))
                {
                    foreach ($_FILES['images']['tmp_name'] as $image)
                    {
                        $filename = $this->_upload_img($image);

                        // Запись в БД
                       $im_db = ORM::factory('adimage');
                      $im_db->ad_id = $data['countrie_id'];
                        $im_db->name = $filename;
                        $im_db->save();
                    }
                }
            }
            catch (ORM_Validation_Exception $e) {
                $errors = $e->errors('validation');
            }
            
           
            
      
  Controller::redirect('index');

   
   }
  

      $ads = View::factory('v_ads_add')
                ->bind('errors', $errors)
                ->bind('data', $data);

      $this->template->block_left = array($ads);

   
      
      
   
      
      
      
      
      
            }
    
    
    
    
	
}