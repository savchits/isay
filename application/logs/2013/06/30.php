<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-06-30 01:47:53 --- CRITICAL: ErrorException [ 8 ]: Undefined index: first_name ~ APPPATH\views\v_auth_register.php [ 24 ] in C:\xampp\htdocs\isay\application\views\v_auth_register.php:24
2013-06-30 01:47:53 --- DEBUG: #0 C:\xampp\htdocs\isay\application\views\v_auth_register.php(24): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 24, Array)
#1 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\isay\application\views\v_autbase.php(169): Kohana_View->__toString()
#5 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\isay\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\isay\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#11 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\isay\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\isay\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\isay\application\views\v_auth_register.php:24
2013-06-30 03:18:23 --- CRITICAL: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 59 ] in :
2013-06-30 03:18:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :