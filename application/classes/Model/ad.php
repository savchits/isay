<?php defined('SYSPATH') or die('No direct script access.');

class Model_Ad extends ORM{




protected $_belongs_to = array(
'countrie' => array(
'model' => 'countrie',
'foreign_key' => 'countrie_id',),
 );


protected $_has_many = array(


'adimages' => array(
'model' => 'adimage',
'foreign_key' => 'ad_id',),


    
    );


}