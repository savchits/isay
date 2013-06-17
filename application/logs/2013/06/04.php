<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-06-04 04:23:21 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_new' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in :
2013-06-04 04:23:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-06-04 04:49:19 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH\classes\Controller\index.php [ 46 ] in :
2013-06-04 04:49:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-06-04 04:49:31 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}', expecting ';' ~ APPPATH\classes\Controller\index.php [ 51 ] in :
2013-06-04 04:49:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-06-04 04:49:38 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Controller\index.php [ 51 ] in :
2013-06-04 04:49:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-06-04 04:50:14 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: a ~ APPPATH\classes\Controller\index.php [ 27 ] in C:\xampp\htdocs\isay\application\classes\Controller\index.php:27
2013-06-04 04:50:14 --- DEBUG: #0 C:\xampp\htdocs\isay\application\classes\Controller\index.php(27): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 27, Array)
#1 C:\xampp\htdocs\isay\system\classes\Kohana\Controller.php(84): Controller_Index->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#4 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\isay\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\isay\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\isay\application\classes\Controller\index.php:27
2013-06-04 04:50:42 --- CRITICAL: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\v_base.php [ 20 ] in C:\xampp\htdocs\isay\application\views\v_base.php:20
2013-06-04 04:50:42 --- DEBUG: #0 C:\xampp\htdocs\isay\application\views\v_base.php(20): Kohana_Core::error_handler(2, 'Invalid argumen...', 'C:\xampp\htdocs...', 20, Array)
#1 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\isay\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\xampp\htdocs\isay\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#7 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\isay\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\isay\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\isay\application\views\v_base.php:20
2013-06-04 04:51:52 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'else' (T_ELSE) ~ APPPATH\classes\Controller\index.php [ 49 ] in :
2013-06-04 04:51:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-06-04 04:52:16 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'else' (T_ELSE) ~ APPPATH\classes\Controller\index.php [ 49 ] in :
2013-06-04 04:52:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-06-04 04:52:17 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'else' (T_ELSE) ~ APPPATH\classes\Controller\index.php [ 49 ] in :
2013-06-04 04:52:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-06-04 04:53:01 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'else' (T_ELSE) ~ APPPATH\classes\Controller\index.php [ 49 ] in :
2013-06-04 04:53:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-06-04 05:28:05 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ''('' (T_CONSTANT_ENCAPSED_STRING), expecting ',' or ';' ~ APPPATH\views\v_mainblock.php [ 2 ] in :
2013-06-04 05:28:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-06-04 07:15:05 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '=', expecting ',' or ';' ~ APPPATH\views\v_mainblock.php [ 2 ] in :
2013-06-04 07:15:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-06-04 07:15:35 --- CRITICAL: ErrorException [ 1 ]: Undefined class constant 'image' ~ APPPATH\views\v_mainblock.php [ 2 ] in :
2013-06-04 07:15:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-06-04 07:23:47 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'style' (T_STRING), expecting ',' or ';' ~ APPPATH\views\v_mainblock.php [ 2 ] in :
2013-06-04 07:23:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :