<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-06-03 02:35:09 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: styles ~ APPPATH\views\v_index.php [ 23 ] in C:\xampp\htdocs\isay\application\views\v_index.php:23
2013-06-03 02:35:09 --- DEBUG: #0 C:\xampp\htdocs\isay\application\views\v_index.php(23): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 23, Array)
#1 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\isay\application\views\v_base.php(2): Kohana_View->__toString()
#5 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\isay\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\isay\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#11 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\isay\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\isay\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\isay\application\views\v_index.php:23
2013-06-03 02:35:53 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: styles ~ APPPATH\views\v_index.php [ 23 ] in C:\xampp\htdocs\isay\application\views\v_index.php:23
2013-06-03 02:35:53 --- DEBUG: #0 C:\xampp\htdocs\isay\application\views\v_index.php(23): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 23, Array)
#1 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\isay\application\views\v_base.php(2): Kohana_View->__toString()
#5 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\isay\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\isay\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#11 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\isay\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\isay\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\isay\application\views\v_index.php:23
2013-06-03 02:37:09 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: styles ~ APPPATH\views\v_index.php [ 23 ] in C:\xampp\htdocs\isay\application\views\v_index.php:23
2013-06-03 02:37:09 --- DEBUG: #0 C:\xampp\htdocs\isay\application\views\v_index.php(23): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 23, Array)
#1 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\isay\application\views\v_base.php(2): Kohana_View->__toString()
#5 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\isay\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\isay\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#11 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\isay\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\isay\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\isay\application\views\v_index.php:23
2013-06-03 02:37:37 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: styles ~ APPPATH\views\v_index.php [ 5 ] in C:\xampp\htdocs\isay\application\views\v_index.php:5
2013-06-03 02:37:37 --- DEBUG: #0 C:\xampp\htdocs\isay\application\views\v_index.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 5, Array)
#1 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\isay\application\views\v_base.php(2): Kohana_View->__toString()
#5 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\isay\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\isay\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#11 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\isay\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\isay\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\isay\application\views\v_index.php:5
2013-06-03 02:39:12 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: styles ~ APPPATH\views\v_index.php [ 5 ] in C:\xampp\htdocs\isay\application\views\v_index.php:5
2013-06-03 02:39:12 --- DEBUG: #0 C:\xampp\htdocs\isay\application\views\v_index.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 5, Array)
#1 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\isay\application\views\v_base.php(2): Kohana_View->__toString()
#5 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\isay\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\isay\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#11 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\isay\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\isay\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\isay\application\views\v_index.php:5
2013-06-03 02:39:57 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: styles ~ APPPATH\views\v_index.php [ 5 ] in C:\xampp\htdocs\isay\application\views\v_index.php:5
2013-06-03 02:39:57 --- DEBUG: #0 C:\xampp\htdocs\isay\application\views\v_index.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 5, Array)
#1 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\isay\application\views\v_base.php(2): Kohana_View->__toString()
#5 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\isay\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\isay\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#11 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\isay\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\isay\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\isay\application\views\v_index.php:5
2013-06-03 02:40:14 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: styles ~ APPPATH\views\v_index.php [ 5 ] in C:\xampp\htdocs\isay\application\views\v_index.php:5
2013-06-03 02:40:14 --- DEBUG: #0 C:\xampp\htdocs\isay\application\views\v_index.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 5, Array)
#1 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\isay\application\views\v_base.php(2): Kohana_View->__toString()
#5 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\isay\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\isay\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#11 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\isay\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\isay\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\isay\application\views\v_index.php:5
2013-06-03 02:40:57 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: styles ~ APPPATH\views\v_index.php [ 5 ] in C:\xampp\htdocs\isay\application\views\v_index.php:5
2013-06-03 02:40:57 --- DEBUG: #0 C:\xampp\htdocs\isay\application\views\v_index.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 5, Array)
#1 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\isay\application\views\v_base.php(2): Kohana_View->__toString()
#5 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\isay\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\isay\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#11 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\isay\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\isay\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\isay\application\views\v_index.php:5
2013-06-03 02:41:48 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: styles ~ APPPATH\views\v_index.php [ 5 ] in C:\xampp\htdocs\isay\application\views\v_index.php:5
2013-06-03 02:41:48 --- DEBUG: #0 C:\xampp\htdocs\isay\application\views\v_index.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 5, Array)
#1 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\isay\application\views\v_base.php(2): Kohana_View->__toString()
#5 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\isay\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\isay\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#11 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\isay\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\isay\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\isay\application\views\v_index.php:5
2013-06-03 02:42:40 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: styles ~ APPPATH\views\v_index.php [ 5 ] in C:\xampp\htdocs\isay\application\views\v_index.php:5
2013-06-03 02:42:40 --- DEBUG: #0 C:\xampp\htdocs\isay\application\views\v_index.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 5, Array)
#1 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\isay\application\views\v_base.php(8): Kohana_View->__toString()
#5 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\isay\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\isay\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#11 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\isay\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\isay\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\isay\application\views\v_index.php:5
2013-06-03 02:44:29 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: styles ~ APPPATH\views\v_index.php [ 1 ] in C:\xampp\htdocs\isay\application\views\v_index.php:1
2013-06-03 02:44:29 --- DEBUG: #0 C:\xampp\htdocs\isay\application\views\v_index.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 1, Array)
#1 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\isay\application\views\v_base.php(2): Kohana_View->__toString()
#5 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\isay\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\isay\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#11 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\isay\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\isay\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\isay\application\views\v_index.php:1
2013-06-03 03:13:03 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ',', expecting ')' ~ APPPATH\classes\Controller\index.php [ 38 ] in :
2013-06-03 03:13:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-06-03 03:14:04 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ',', expecting ')' ~ APPPATH\classes\Controller\index.php [ 63 ] in :
2013-06-03 03:14:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-06-03 03:30:39 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ''MEDIA/CSS/jqueryslidemenu.css' (T_CONSTANT_ENCAPSED_STRING), expecting ')' ~ APPPATH\classes\Controller\index.php [ 39 ] in :
2013-06-03 03:30:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-06-03 03:34:01 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ''MEDIA/CSS/jqueryslidemenu.css' (T_CONSTANT_ENCAPSED_STRING), expecting ')' ~ APPPATH\classes\Controller\index.php [ 39 ] in :
2013-06-03 03:34:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-06-03 05:33:08 --- CRITICAL: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH\views\v_index.php [ 24 ] in :
2013-06-03 05:33:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-06-03 05:33:33 --- CRITICAL: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH\views\v_index.php [ 24 ] in :
2013-06-03 05:33:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-06-03 05:48:38 --- CRITICAL: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ MODPATH\database\classes\Kohana\Database\MySQL\Result.php [ 28 ] in :
2013-06-03 05:48:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-06-03 05:56:14 --- CRITICAL: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 59 ] in :
2013-06-03 05:56:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-06-03 08:10:55 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: a ~ APPPATH\views\v_base.php [ 76 ] in C:\xampp\htdocs\isay\application\views\v_base.php:76
2013-06-03 08:10:55 --- DEBUG: #0 C:\xampp\htdocs\isay\application\views\v_base.php(76): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 76, Array)
#1 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\isay\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\xampp\htdocs\isay\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#7 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\isay\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\isay\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\isay\application\views\v_base.php:76
2013-06-03 08:12:03 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: a ~ APPPATH\views\v_base.php [ 75 ] in C:\xampp\htdocs\isay\application\views\v_base.php:75
2013-06-03 08:12:03 --- DEBUG: #0 C:\xampp\htdocs\isay\application\views\v_base.php(75): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 75, Array)
#1 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\isay\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\xampp\htdocs\isay\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#7 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\isay\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\isay\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\isay\application\views\v_base.php:75
2013-06-03 08:21:21 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: a ~ APPPATH\views\v_mainblock.php [ 1 ] in C:\xampp\htdocs\isay\application\views\v_mainblock.php:1
2013-06-03 08:21:21 --- DEBUG: #0 C:\xampp\htdocs\isay\application\views\v_mainblock.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 1, Array)
#1 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\isay\application\views\v_base.php(13): Kohana_View->__toString()
#5 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\isay\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\isay\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#11 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\isay\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\isay\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\isay\application\views\v_mainblock.php:1
2013-06-03 08:21:33 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: mainblock ~ APPPATH\views\v_base.php [ 13 ] in C:\xampp\htdocs\isay\application\views\v_base.php:13
2013-06-03 08:21:33 --- DEBUG: #0 C:\xampp\htdocs\isay\application\views\v_base.php(13): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 13, Array)
#1 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\isay\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\xampp\htdocs\isay\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#7 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\isay\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\isay\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\isay\application\views\v_base.php:13
2013-06-03 08:24:20 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: url ~ APPPATH\classes\Controller\index.php [ 87 ] in C:\xampp\htdocs\isay\application\classes\Controller\index.php:87
2013-06-03 08:24:20 --- DEBUG: #0 C:\xampp\htdocs\isay\application\classes\Controller\index.php(87): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 87, Array)
#1 C:\xampp\htdocs\isay\system\classes\Kohana\Controller.php(84): Controller_Index->action_usa()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#4 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\isay\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\isay\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\isay\application\classes\Controller\index.php:87
2013-06-03 08:30:59 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'public' (T_PUBLIC) ~ APPPATH\classes\Controller\index.php [ 84 ] in :
2013-06-03 08:30:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-06-03 08:33:37 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '$worldnews' (T_VARIABLE), expecting ')' ~ APPPATH\classes\Controller\index.php [ 46 ] in :
2013-06-03 08:33:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-06-03 08:33:41 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '$worldnews' (T_VARIABLE), expecting ')' ~ APPPATH\classes\Controller\index.php [ 46 ] in :
2013-06-03 08:33:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-06-03 08:33:46 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '$worldnews' (T_VARIABLE), expecting ')' ~ APPPATH\classes\Controller\index.php [ 46 ] in :
2013-06-03 08:33:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-06-03 08:36:37 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\views\v_base.php [ 13 ] in C:\xampp\htdocs\isay\application\views\v_base.php:13
2013-06-03 08:36:37 --- DEBUG: #0 C:\xampp\htdocs\isay\application\views\v_base.php(13): Kohana_Core::error_handler(8, 'Array to string...', 'C:\xampp\htdocs...', 13, Array)
#1 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\isay\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\xampp\htdocs\isay\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#7 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\isay\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\isay\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\isay\application\views\v_base.php:13
2013-06-03 08:37:41 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\views\v_base.php [ 13 ] in C:\xampp\htdocs\isay\application\views\v_base.php:13
2013-06-03 08:37:41 --- DEBUG: #0 C:\xampp\htdocs\isay\application\views\v_base.php(13): Kohana_Core::error_handler(8, 'Array to string...', 'C:\xampp\htdocs...', 13, Array)
#1 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\isay\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\xampp\htdocs\isay\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#7 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\isay\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\isay\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\isay\application\views\v_base.php:13
2013-06-03 08:38:38 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\views\v_base.php [ 13 ] in C:\xampp\htdocs\isay\application\views\v_base.php:13
2013-06-03 08:38:38 --- DEBUG: #0 C:\xampp\htdocs\isay\application\views\v_base.php(13): Kohana_Core::error_handler(8, 'Array to string...', 'C:\xampp\htdocs...', 13, Array)
#1 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\isay\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\xampp\htdocs\isay\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#7 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\isay\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\isay\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\isay\application\views\v_base.php:13
2013-06-03 08:39:18 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: a ~ APPPATH\views\v_mainblock.php [ 1 ] in C:\xampp\htdocs\isay\application\views\v_mainblock.php:1
2013-06-03 08:39:18 --- DEBUG: #0 C:\xampp\htdocs\isay\application\views\v_mainblock.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 1, Array)
#1 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\isay\application\views\v_base.php(13): Kohana_View->__toString()
#5 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\isay\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\isay\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#11 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\isay\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\isay\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\isay\application\views\v_mainblock.php:1
2013-06-03 08:40:16 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: a ~ APPPATH\views\v_mainblock.php [ 1 ] in C:\xampp\htdocs\isay\application\views\v_mainblock.php:1
2013-06-03 08:40:16 --- DEBUG: #0 C:\xampp\htdocs\isay\application\views\v_mainblock.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 1, Array)
#1 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\isay\application\views\v_base.php(13): Kohana_View->__toString()
#5 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\isay\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\isay\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#11 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\isay\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\isay\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\isay\application\views\v_mainblock.php:1
2013-06-03 08:40:34 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: a ~ APPPATH\views\v_mainblock.php [ 1 ] in C:\xampp\htdocs\isay\application\views\v_mainblock.php:1
2013-06-03 08:40:34 --- DEBUG: #0 C:\xampp\htdocs\isay\application\views\v_mainblock.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 1, Array)
#1 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\isay\application\views\v_base.php(13): Kohana_View->__toString()
#5 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\isay\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\isay\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#11 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\isay\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\isay\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\isay\application\views\v_mainblock.php:1
2013-06-03 08:41:58 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: a ~ APPPATH\views\v_mainblock.php [ 6 ] in C:\xampp\htdocs\isay\application\views\v_mainblock.php:6
2013-06-03 08:41:58 --- DEBUG: #0 C:\xampp\htdocs\isay\application\views\v_mainblock.php(6): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 6, Array)
#1 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\isay\application\views\v_base.php(13): Kohana_View->__toString()
#5 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\isay\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\isay\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#11 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\isay\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\isay\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\isay\application\views\v_mainblock.php:6
2013-06-03 08:45:45 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '$a' (T_VARIABLE) ~ APPPATH\classes\Controller\index.php [ 22 ] in :
2013-06-03 08:45:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-06-03 08:46:17 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '$a' (T_VARIABLE) ~ APPPATH\classes\Controller\index.php [ 23 ] in :
2013-06-03 08:46:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-06-03 09:05:30 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH\classes\Controller\index.php [ 23 ] in :
2013-06-03 09:05:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-06-03 09:07:02 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: url ~ APPPATH\classes\Controller\index.php [ 23 ] in C:\xampp\htdocs\isay\application\classes\Controller\index.php:23
2013-06-03 09:07:02 --- DEBUG: #0 C:\xampp\htdocs\isay\application\classes\Controller\index.php(23): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 23, Array)
#1 C:\xampp\htdocs\isay\system\classes\Kohana\Controller.php(84): Controller_Index->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#4 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\isay\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\isay\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\isay\application\classes\Controller\index.php:23
2013-06-03 09:30:28 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH\classes\Controller\index.php [ 30 ] in :
2013-06-03 09:30:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :