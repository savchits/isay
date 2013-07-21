<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-07-21 03:17:47 --- CRITICAL: View_Exception [ 0 ]: The requested view v_accountsettings could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\xampp\htdocs\isay\system\classes\Kohana\View.php:137
2013-07-21 03:17:47 --- DEBUG: #0 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(137): Kohana_View->set_filename('v_accountsettin...')
#1 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(30): Kohana_View->__construct('v_accountsettin...', NULL)
#2 C:\xampp\htdocs\isay\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('v_accountsettin...')
#3 C:\xampp\htdocs\isay\application\classes\Controller\settingsbase.php(16): Kohana_Controller_Template->before()
#4 C:\xampp\htdocs\isay\application\classes\Controller\accountsettings.php(11): Controller_Settingsbase->before()
#5 C:\xampp\htdocs\isay\system\classes\Kohana\Controller.php(69): Controller_Accountsettings->before()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Accountsettings))
#8 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\xampp\htdocs\isay\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\isay\index.php(118): Kohana_Request->execute()
#11 {main} in C:\xampp\htdocs\isay\system\classes\Kohana\View.php:137