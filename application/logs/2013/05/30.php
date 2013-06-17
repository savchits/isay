<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-05-30 10:04:40 --- CRITICAL: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\xampp\htdocs\isay\system\classes\Kohana\View.php:137
2013-05-30 10:04:40 --- DEBUG: #0 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(137): Kohana_View->set_filename('template')
#1 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(30): Kohana_View->__construct('template', NULL)
#2 C:\xampp\htdocs\isay\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('template')
#3 C:\xampp\htdocs\isay\application\classes\Controller\basefirst.php(15): Kohana_Controller_Template->before()
#4 C:\xampp\htdocs\isay\application\classes\Controller\base.php(16): Controller_Basefirst->before()
#5 C:\xampp\htdocs\isay\application\classes\Controller\index.php(10): Controller_Base->before()
#6 C:\xampp\htdocs\isay\system\classes\Kohana\Controller.php(69): Controller_Index->before()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#9 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\xampp\htdocs\isay\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\isay\index.php(118): Kohana_Request->execute()
#12 {main} in C:\xampp\htdocs\isay\system\classes\Kohana\View.php:137
2013-05-30 13:37:15 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '$this' (T_VARIABLE) ~ APPPATH\classes\Controller\index.php [ 141 ] in :
2013-05-30 13:37:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :