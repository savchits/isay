<?php defined('SYSPATH') or die('No direct script access.');

class Model_Countrie extends ORM{


protected $_has_many = array(
'ads' => array(
'model' => 'ad',
'foreign_key' => 'countrie_id',),
    
    
    
'news' => array(
'model' => 'worldnew',
'foreign_key' => 'countrie_id',),
    
    
    
    
    );





}