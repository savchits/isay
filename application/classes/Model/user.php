<?php defined('SYSPATH') or die('No direct script access.');

class Model_User extends Model_Auth_User {


	/**
	 * A user has many tokens and roles
	 *
	 * @var array Relationhips
	 */
	protected $_has_many = array(
		'user_tokens' => array
        ('model' => 'User_Token'),



		'roles'  => array(
        'model' => 'Role',
        'through' => 'roles_users'),



        'userimages' => array(
        'model' => 'userimage',
        'foreign_key' => 'user_id',),




        'pollanswears'  => array(
        'model' => 'Pollanswear',
        'through' => 'users_pollanswears'),




	);






} 
