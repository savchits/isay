<?php defined('SYSPATH') or die('No direct script access.');

class Model_Worldnew extends ORM{

protected $_belongs_to = array(
'countrie' => array(
'model' => 'countrie',
'foreign_key' => 'countrie_id',),
 );




}