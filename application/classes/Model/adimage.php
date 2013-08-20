<?php defined('SYSPATH') or die('No direct script access.');

class Model_Adimage extends ORM{



protected $_belongs_to = array(
'ads' => array(
'model' => 'ad',
'foreign_key' => 'ad_id',),



    );

}

