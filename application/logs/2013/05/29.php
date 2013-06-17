<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-05-29 04:38:39 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_new' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in :
2013-05-29 04:38:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-29 04:42:17 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: scripts ~ APPPATH\views\v_index.php [ 26 ] in C:\xampp\htdocs\isay\application\views\v_index.php:26
2013-05-29 04:42:17 --- DEBUG: #0 C:\xampp\htdocs\isay\application\views\v_index.php(26): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 26, Array)
#1 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\isay\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\xampp\htdocs\isay\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#7 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\isay\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\isay\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\isay\application\views\v_index.php:26
2013-05-29 04:42:35 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: scripts ~ APPPATH\views\v_index.php [ 26 ] in C:\xampp\htdocs\isay\application\views\v_index.php:26
2013-05-29 04:42:35 --- DEBUG: #0 C:\xampp\htdocs\isay\application\views\v_index.php(26): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 26, Array)
#1 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\isay\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\xampp\htdocs\isay\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#7 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\isay\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\isay\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\isay\application\views\v_index.php:26
2013-05-29 04:42:38 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: scripts ~ APPPATH\views\v_index.php [ 26 ] in C:\xampp\htdocs\isay\application\views\v_index.php:26
2013-05-29 04:42:38 --- DEBUG: #0 C:\xampp\htdocs\isay\application\views\v_index.php(26): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 26, Array)
#1 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\isay\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\xampp\htdocs\isay\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#7 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\isay\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\isay\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\isay\application\views\v_index.php:26
2013-05-29 04:45:56 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: scripts ~ APPPATH\views\v_index.php [ 26 ] in C:\xampp\htdocs\isay\application\views\v_index.php:26
2013-05-29 04:45:56 --- DEBUG: #0 C:\xampp\htdocs\isay\application\views\v_index.php(26): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 26, Array)
#1 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\isay\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\xampp\htdocs\isay\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#7 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\isay\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\isay\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\isay\application\views\v_index.php:26
2013-05-29 04:46:47 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: scripts ~ APPPATH\views\v_index.php [ 26 ] in C:\xampp\htdocs\isay\application\views\v_index.php:26
2013-05-29 04:46:47 --- DEBUG: #0 C:\xampp\htdocs\isay\application\views\v_index.php(26): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 26, Array)
#1 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\isay\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\xampp\htdocs\isay\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#7 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\isay\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\isay\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\isay\application\views\v_index.php:26
2013-05-29 04:47:27 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: mainblock ~ APPPATH\views\v_index.php [ 157 ] in C:\xampp\htdocs\isay\application\views\v_index.php:157
2013-05-29 04:47:27 --- DEBUG: #0 C:\xampp\htdocs\isay\application\views\v_index.php(157): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 157, Array)
#1 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\isay\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\xampp\htdocs\isay\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#7 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\isay\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\isay\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\isay\application\views\v_index.php:157
2013-05-29 07:29:43 --- CRITICAL: Database_Exception [ 1044 ]: Access denied for user ''@'localhost' to database 'kohana' ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 108 ] in C:\xampp\htdocs\isay\modules\database\classes\Kohana\Database\MySQL.php:75
2013-05-29 07:29:43 --- DEBUG: #0 C:\xampp\htdocs\isay\modules\database\classes\Kohana\Database\MySQL.php(75): Kohana_Database_MySQL->_select_db('kohana')
#1 C:\xampp\htdocs\isay\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#2 C:\xampp\htdocs\isay\modules\database\classes\Kohana\Database\MySQL.php(358): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 C:\xampp\htdocs\isay\modules\orm\classes\Kohana\ORM.php(1665): Kohana_Database_MySQL->list_columns('mains')
#4 C:\xampp\htdocs\isay\modules\orm\classes\Kohana\ORM.php(441): Kohana_ORM->list_columns()
#5 C:\xampp\htdocs\isay\modules\orm\classes\Kohana\ORM.php(386): Kohana_ORM->reload_columns()
#6 C:\xampp\htdocs\isay\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#7 C:\xampp\htdocs\isay\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#8 C:\xampp\htdocs\isay\application\classes\Controller\index.php(19): Kohana_ORM::factory('main')
#9 C:\xampp\htdocs\isay\system\classes\Kohana\Controller.php(84): Controller_Index->action_index()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#12 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\xampp\htdocs\isay\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 C:\xampp\htdocs\isay\index.php(118): Kohana_Request->execute()
#15 {main} in C:\xampp\htdocs\isay\modules\database\classes\Kohana\Database\MySQL.php:75
2013-05-29 08:07:43 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: block_right ~ APPPATH\views\v_base.php [ 29 ] in C:\xampp\htdocs\isay\application\views\v_base.php:29
2013-05-29 08:07:43 --- DEBUG: #0 C:\xampp\htdocs\isay\application\views\v_base.php(29): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 29, Array)
#1 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\isay\application\views\v_index.php(157): Kohana_View->__toString()
#5 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\isay\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\isay\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#11 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\isay\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\isay\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\isay\application\views\v_base.php:29
2013-05-29 08:09:40 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: block_right ~ APPPATH\views\v_base.php [ 29 ] in C:\xampp\htdocs\isay\application\views\v_base.php:29
2013-05-29 08:09:40 --- DEBUG: #0 C:\xampp\htdocs\isay\application\views\v_base.php(29): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 29, Array)
#1 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\isay\application\views\v_index.php(157): Kohana_View->__toString()
#5 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\isay\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\isay\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#11 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\isay\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\isay\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\isay\application\views\v_base.php:29
2013-05-29 08:12:06 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: block_right ~ APPPATH\views\v_base.php [ 29 ] in C:\xampp\htdocs\isay\application\views\v_base.php:29
2013-05-29 08:12:06 --- DEBUG: #0 C:\xampp\htdocs\isay\application\views\v_base.php(29): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 29, Array)
#1 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\isay\application\views\v_index.php(157): Kohana_View->__toString()
#5 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\isay\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\isay\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#11 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\isay\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\isay\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\isay\application\views\v_base.php:29
2013-05-29 08:12:29 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: block_right ~ APPPATH\views\v_base.php [ 29 ] in C:\xampp\htdocs\isay\application\views\v_base.php:29
2013-05-29 08:12:29 --- DEBUG: #0 C:\xampp\htdocs\isay\application\views\v_base.php(29): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 29, Array)
#1 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\isay\application\views\v_index.php(157): Kohana_View->__toString()
#5 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\isay\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\isay\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#11 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\isay\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\isay\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\isay\application\views\v_base.php:29
2013-05-29 08:12:59 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: block_right ~ APPPATH\views\v_base.php [ 29 ] in C:\xampp\htdocs\isay\application\views\v_base.php:29
2013-05-29 08:12:59 --- DEBUG: #0 C:\xampp\htdocs\isay\application\views\v_base.php(29): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 29, Array)
#1 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\isay\application\views\v_index.php(157): Kohana_View->__toString()
#5 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\isay\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\isay\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#11 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\isay\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\isay\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\isay\application\views\v_base.php:29
2013-05-29 08:13:19 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: block_right ~ APPPATH\views\v_base.php [ 29 ] in C:\xampp\htdocs\isay\application\views\v_base.php:29
2013-05-29 08:13:19 --- DEBUG: #0 C:\xampp\htdocs\isay\application\views\v_base.php(29): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 29, Array)
#1 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\isay\application\views\v_index.php(157): Kohana_View->__toString()
#5 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\isay\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\isay\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#11 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\isay\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\isay\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\isay\application\views\v_base.php:29
2013-05-29 08:15:15 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: block_right ~ APPPATH\views\v_base.php [ 29 ] in C:\xampp\htdocs\isay\application\views\v_base.php:29
2013-05-29 08:15:15 --- DEBUG: #0 C:\xampp\htdocs\isay\application\views\v_base.php(29): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 29, Array)
#1 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\isay\application\views\v_index.php(157): Kohana_View->__toString()
#5 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\isay\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\isay\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#11 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\isay\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\isay\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\isay\application\views\v_base.php:29
2013-05-29 08:16:05 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: block_right ~ APPPATH\views\v_base.php [ 29 ] in C:\xampp\htdocs\isay\application\views\v_base.php:29
2013-05-29 08:16:05 --- DEBUG: #0 C:\xampp\htdocs\isay\application\views\v_base.php(29): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 29, Array)
#1 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\isay\application\views\v_index.php(157): Kohana_View->__toString()
#5 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\isay\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\isay\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#11 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\isay\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\isay\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\isay\application\views\v_base.php:29
2013-05-29 08:18:26 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$name ~ APPPATH\views\v_worldnews.php [ 4 ] in C:\xampp\htdocs\isay\application\views\v_worldnews.php:4
2013-05-29 08:18:26 --- DEBUG: #0 C:\xampp\htdocs\isay\application\views\v_worldnews.php(4): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\xampp\htdocs...', 4, Array)
#1 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\isay\application\views\v_base.php(30): Kohana_View->__toString()
#5 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\isay\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\isay\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#11 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\isay\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\isay\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\isay\application\views\v_worldnews.php:4
2013-05-29 08:20:21 --- CRITICAL: View_Exception [ 0 ]: The requested view v_main could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\xampp\htdocs\isay\system\classes\Kohana\View.php:137
2013-05-29 08:20:21 --- DEBUG: #0 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(137): Kohana_View->set_filename('v_main')
#1 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(30): Kohana_View->__construct('v_main', NULL)
#2 C:\xampp\htdocs\isay\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('v_main')
#3 C:\xampp\htdocs\isay\application\classes\Controller\basefirst.php(15): Kohana_Controller_Template->before()
#4 C:\xampp\htdocs\isay\application\classes\Controller\base.php(15): Controller_Basefirst->before()
#5 C:\xampp\htdocs\isay\application\classes\Controller\index.php(10): Controller_Base->before()
#6 C:\xampp\htdocs\isay\system\classes\Kohana\Controller.php(69): Controller_Index->before()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#9 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\xampp\htdocs\isay\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\isay\index.php(118): Kohana_Request->execute()
#12 {main} in C:\xampp\htdocs\isay\system\classes\Kohana\View.php:137
2013-05-29 08:21:14 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$name ~ APPPATH\views\v_worldnews.php [ 4 ] in C:\xampp\htdocs\isay\application\views\v_worldnews.php:4
2013-05-29 08:21:14 --- DEBUG: #0 C:\xampp\htdocs\isay\application\views\v_worldnews.php(4): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\xampp\htdocs...', 4, Array)
#1 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\isay\application\views\v_base.php(30): Kohana_View->__toString()
#5 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\isay\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\isay\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#11 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\isay\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\isay\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\isay\application\views\v_worldnews.php:4
2013-05-29 08:21:48 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$name ~ APPPATH\views\v_worldnews.php [ 4 ] in C:\xampp\htdocs\isay\application\views\v_worldnews.php:4
2013-05-29 08:21:48 --- DEBUG: #0 C:\xampp\htdocs\isay\application\views\v_worldnews.php(4): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\xampp\htdocs...', 4, Array)
#1 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\isay\application\views\v_base.php(30): Kohana_View->__toString()
#5 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\isay\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\isay\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#11 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\isay\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\isay\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\isay\application\views\v_worldnews.php:4
2013-05-29 08:21:51 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$name ~ APPPATH\views\v_worldnews.php [ 4 ] in C:\xampp\htdocs\isay\application\views\v_worldnews.php:4
2013-05-29 08:21:51 --- DEBUG: #0 C:\xampp\htdocs\isay\application\views\v_worldnews.php(4): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\xampp\htdocs...', 4, Array)
#1 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\isay\application\views\v_base.php(30): Kohana_View->__toString()
#5 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\isay\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\isay\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#11 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\isay\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\isay\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\isay\application\views\v_worldnews.php:4
2013-05-29 08:23:44 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: a ~ APPPATH\classes\Controller\index.php [ 11 ] in C:\xampp\htdocs\isay\application\classes\Controller\index.php:11
2013-05-29 08:23:44 --- DEBUG: #0 C:\xampp\htdocs\isay\application\classes\Controller\index.php(11): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 11, Array)
#1 C:\xampp\htdocs\isay\system\classes\Kohana\Controller.php(69): Controller_Index->before()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#4 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\isay\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\isay\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\isay\application\classes\Controller\index.php:11
2013-05-29 08:24:07 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: url ~ APPPATH\classes\Controller\index.php [ 12 ] in C:\xampp\htdocs\isay\application\classes\Controller\index.php:12
2013-05-29 08:24:07 --- DEBUG: #0 C:\xampp\htdocs\isay\application\classes\Controller\index.php(12): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 12, Array)
#1 C:\xampp\htdocs\isay\system\classes\Kohana\Controller.php(69): Controller_Index->before()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#4 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\isay\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\isay\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\isay\application\classes\Controller\index.php:12
2013-05-29 08:24:33 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: worldnews ~ APPPATH\classes\Controller\index.php [ 50 ] in C:\xampp\htdocs\isay\application\classes\Controller\index.php:50
2013-05-29 08:24:33 --- DEBUG: #0 C:\xampp\htdocs\isay\application\classes\Controller\index.php(50): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 50, Array)
#1 C:\xampp\htdocs\isay\system\classes\Kohana\Controller.php(84): Controller_Index->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#4 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\isay\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\isay\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\isay\application\classes\Controller\index.php:50
2013-05-29 08:24:57 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$name ~ APPPATH\views\v_worldnews.php [ 4 ] in C:\xampp\htdocs\isay\application\views\v_worldnews.php:4
2013-05-29 08:24:57 --- DEBUG: #0 C:\xampp\htdocs\isay\application\views\v_worldnews.php(4): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\xampp\htdocs...', 4, Array)
#1 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\isay\application\views\v_base.php(30): Kohana_View->__toString()
#5 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\isay\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\isay\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#11 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\isay\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\isay\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\isay\application\views\v_worldnews.php:4
2013-05-29 08:25:28 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$name ~ APPPATH\views\v_worldnews.php [ 4 ] in C:\xampp\htdocs\isay\application\views\v_worldnews.php:4
2013-05-29 08:25:28 --- DEBUG: #0 C:\xampp\htdocs\isay\application\views\v_worldnews.php(4): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\xampp\htdocs...', 4, Array)
#1 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\isay\application\views\v_base.php(30): Kohana_View->__toString()
#5 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\isay\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\isay\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#11 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\isay\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\isay\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\isay\application\views\v_worldnews.php:4
2013-05-29 08:25:31 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$name ~ APPPATH\views\v_worldnews.php [ 4 ] in C:\xampp\htdocs\isay\application\views\v_worldnews.php:4
2013-05-29 08:25:31 --- DEBUG: #0 C:\xampp\htdocs\isay\application\views\v_worldnews.php(4): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\xampp\htdocs...', 4, Array)
#1 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\isay\application\views\v_base.php(30): Kohana_View->__toString()
#5 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\isay\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\isay\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#11 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\isay\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\isay\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\isay\application\views\v_worldnews.php:4
2013-05-29 08:25:41 --- CRITICAL: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\xampp\htdocs\isay\system\classes\Kohana\View.php:137
2013-05-29 08:25:41 --- DEBUG: #0 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(137): Kohana_View->set_filename('template')
#1 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(30): Kohana_View->__construct('template', NULL)
#2 C:\xampp\htdocs\isay\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('template')
#3 C:\xampp\htdocs\isay\application\classes\Controller\basefirst.php(13): Kohana_Controller_Template->before()
#4 C:\xampp\htdocs\isay\application\classes\Controller\base.php(15): Controller_Basefirst->before()
#5 C:\xampp\htdocs\isay\application\classes\Controller\index.php(10): Controller_Base->before()
#6 C:\xampp\htdocs\isay\system\classes\Kohana\Controller.php(69): Controller_Index->before()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#9 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\xampp\htdocs\isay\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\isay\index.php(118): Kohana_Request->execute()
#12 {main} in C:\xampp\htdocs\isay\system\classes\Kohana\View.php:137
2013-05-29 08:26:08 --- CRITICAL: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\xampp\htdocs\isay\system\classes\Kohana\View.php:137
2013-05-29 08:26:08 --- DEBUG: #0 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(137): Kohana_View->set_filename('template')
#1 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(30): Kohana_View->__construct('template', NULL)
#2 C:\xampp\htdocs\isay\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('template')
#3 C:\xampp\htdocs\isay\application\classes\Controller\basefirst.php(13): Kohana_Controller_Template->before()
#4 C:\xampp\htdocs\isay\application\classes\Controller\base.php(15): Controller_Basefirst->before()
#5 C:\xampp\htdocs\isay\application\classes\Controller\index.php(10): Controller_Base->before()
#6 C:\xampp\htdocs\isay\system\classes\Kohana\Controller.php(69): Controller_Index->before()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#9 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\xampp\htdocs\isay\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\isay\index.php(118): Kohana_Request->execute()
#12 {main} in C:\xampp\htdocs\isay\system\classes\Kohana\View.php:137
2013-05-29 08:26:26 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$name ~ APPPATH\views\v_worldnews.php [ 4 ] in C:\xampp\htdocs\isay\application\views\v_worldnews.php:4
2013-05-29 08:26:26 --- DEBUG: #0 C:\xampp\htdocs\isay\application\views\v_worldnews.php(4): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\xampp\htdocs...', 4, Array)
#1 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\isay\application\views\v_base.php(30): Kohana_View->__toString()
#5 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\isay\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\isay\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#11 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\isay\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\isay\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\isay\application\views\v_worldnews.php:4
2013-05-29 08:26:38 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: block_right ~ APPPATH\views\v_base.php [ 29 ] in C:\xampp\htdocs\isay\application\views\v_base.php:29
2013-05-29 08:26:38 --- DEBUG: #0 C:\xampp\htdocs\isay\application\views\v_base.php(29): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 29, Array)
#1 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\isay\application\views\v_index.php(157): Kohana_View->__toString()
#5 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\isay\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\isay\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#11 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\isay\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\isay\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\isay\application\views\v_base.php:29
2013-05-29 08:28:01 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: block_right ~ APPPATH\views\v_base.php [ 29 ] in C:\xampp\htdocs\isay\application\views\v_base.php:29
2013-05-29 08:28:01 --- DEBUG: #0 C:\xampp\htdocs\isay\application\views\v_base.php(29): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 29, Array)
#1 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\isay\application\views\v_index.php(157): Kohana_View->__toString()
#5 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\isay\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\isay\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#11 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\isay\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\isay\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\isay\application\views\v_base.php:29
2013-05-29 08:28:45 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$name ~ APPPATH\views\v_worldnews.php [ 4 ] in C:\xampp\htdocs\isay\application\views\v_worldnews.php:4
2013-05-29 08:28:45 --- DEBUG: #0 C:\xampp\htdocs\isay\application\views\v_worldnews.php(4): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\xampp\htdocs...', 4, Array)
#1 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\isay\application\views\v_base.php(30): Kohana_View->__toString()
#5 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\isay\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\isay\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#11 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\isay\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\isay\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\isay\application\views\v_worldnews.php:4
2013-05-29 08:30:29 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: block_right ~ APPPATH\views\v_base.php [ 29 ] in C:\xampp\htdocs\isay\application\views\v_base.php:29
2013-05-29 08:30:29 --- DEBUG: #0 C:\xampp\htdocs\isay\application\views\v_base.php(29): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 29, Array)
#1 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\isay\application\views\v_index.php(157): Kohana_View->__toString()
#5 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\isay\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\isay\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#11 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\isay\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\isay\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\isay\application\views\v_base.php:29
2013-05-29 08:31:49 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: styles ~ APPPATH\views\v_index.php [ 22 ] in C:\xampp\htdocs\isay\application\views\v_index.php:22
2013-05-29 08:31:49 --- DEBUG: #0 C:\xampp\htdocs\isay\application\views\v_index.php(22): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 22, Array)
#1 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\isay\application\classes\Controller\base.php(24): Kohana_View->__toString()
#5 C:\xampp\htdocs\isay\application\classes\Controller\index.php(10): Controller_Base->before()
#6 C:\xampp\htdocs\isay\system\classes\Kohana\Controller.php(69): Controller_Index->before()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#9 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\xampp\htdocs\isay\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\isay\index.php(118): Kohana_Request->execute()
#12 {main} in C:\xampp\htdocs\isay\application\views\v_index.php:22
2013-05-29 08:31:49 --- CRITICAL: Kohana_Exception [ 0 ]: View variable is not set: 
#kohana_error { background: #ddd; font-size: 1em; font-family:sans-serif; text-align: left; color: #111; }
#kohana_error h1,
#kohana_error h2 { margin: 0; padding: 1em; font-size: 1em; font-weight: normal; background: #911; color: #fff; }
	#kohana_error h1 a,
	#kohana_error h2 a { color: #fff; }
#kohana_error h2 { background: #222; }
#kohana_error h3 { margin: 0; padding: 0.4em 0 0; font-size: 1em; font-weight: normal; }
#kohana_error p { margin: 0; padding: 0.2em 0; }
#kohana_error a { color: #1b323b; }
#kohana_error pre { overflow: auto; white-space: pre-wrap; }
#kohana_error table { width: 100%; display: block; margin: 0 0 0.4em; padding: 0; border-collapse: collapse; background: #fff; }
	#kohana_error table td { border: solid 1px #ddd; text-align: left; vertical-align: top; padding: 0.4em; }
#kohana_error div.content { padding: 0.4em 1em 1em; overflow: hidden; }
#kohana_error pre.source { margin: 0 0 1em; padding: 0.4em; background: #fff; border: dotted 1px #b7c680; line-height: 1.2em; }
	#kohana_error pre.source span.line { display: block; }
	#kohana_error pre.source span.highlight { background: #f0eb96; }
		#kohana_error pre.source span.line span.number { color: #666; }
#kohana_error ol.trace { display: block; margin: 0 0 0 2em; padding: 0; list-style: decimal; }
	#kohana_error ol.trace li { margin: 0; padding: 0; }
.js .collapsed { display: none; }


document.documentElement.className = document.documentElement.className + ' js';
function koggle(elem)
{
	elem = document.getElementById(elem);

	if (elem.style && elem.style['display'])
		// Only works with the "style" attr
		var disp = elem.style['display'];
	else if (elem.currentStyle)
		// For MSIE, naturally
		var disp = elem.currentStyle['display'];
	else if (window.getComputedStyle)
		// For most other browsers
		var disp = document.defaultView.getComputedStyle(elem, null).getPropertyValue('display');

	// Toggle the state of the "display" style
	elem.style.display = disp == 'block' ? 'none' : 'block';
	return false;
}


	ErrorException [ Notice ]: Undefined variable: styles
	
		APPPATH\views\v_index.php [ 22 ]
		17 &lt;style type="text/css"&gt;
18 html .jqueryslidemenu { height: 1%; } /* Holly Hack for IE7 and below */
19 &lt;/style&gt;
20 &lt;![endif]--&gt;
21 		
22 		&lt;?php foreach($styles as $style):?&gt;
23 		&lt;?php echo HTML::style($style); ?&gt;
24 		&lt;?php endforeach;?&gt;
25 		
26 				&lt;?php foreach($scripts as $script):?&gt;
27 		&lt;?php echo HTML::script($script); ?&gt;
		
					
				
					
													APPPATH\views\v_index.php [ 22 ]
											
					&raquo;
					Kohana_Core::error_handler(arguments)
				
								
					
											
							0
							integer 8
						
											
							1
							string(26) "Undefined variable: styles"
						
											
							2
							string(50) "C:\xampp\htdocs\isay\application\views\v_index.php"
						
											
							3
							integer 22
						
											
							4
							array(2) (
    "kohana_view_filename" => string(50) "C:\xampp\htdocs\isay\application\views\v_index.php"
    "kohana_view_data" => array(0) 
)
						
										
				
													17 &lt;style type="text/css"&gt;
18 html .jqueryslidemenu { height: 1%; } /* Holly Hack for IE7 and below */
19 &lt;/style&gt;
20 &lt;![endif]--&gt;
21 		
22 		&lt;?php foreach($styles as $style):?&gt;
23 		&lt;?php echo HTML::style($style); ?&gt;
24 		&lt;?php endforeach;?&gt;
25 		
26 				&lt;?php foreach($scripts as $script):?&gt;
27 		&lt;?php echo HTML::script($script); ?&gt;

							
								
				
					
													SYSPATH\classes\Kohana\View.php [ 61 ]
											
					&raquo;
					include(arguments)
				
								
					
											
							0
							string(50) "C:\xampp\htdocs\isay\application\views\v_index.php"
						
										
				
													56 		ob_start();
57 
58 		try
59 		{
60 			// Load the view within the current scope
61 			include $kohana_view_filename;
62 		}
63 		catch (Exception $e)
64 		{
65 			// Delete the output buffer
66 			ob_end_clean();

							
								
				
					
													SYSPATH\classes\Kohana\View.php [ 348 ]
											
					&raquo;
					Kohana_View::capture(arguments)
				
								
					
											
							0
							string(50) "C:\xampp\htdocs\isay\application\views\v_index.php"
						
											
							1
							array(0) 
						
										
				
													343 		{
344 			throw new View_Exception('You must set the file to use within your view before rendering');
345 		}
346 
347 		// Combine local and global data and capture the output
348 		return View::capture($this-&gt;_file, $this-&gt;_data);
349 	}
350 
351 } // End View

							
								
				
					
													SYSPATH\classes\Kohana\View.php [ 228 ]
											
					&raquo;
					Kohana_View->render()
				
													223 	 */
224 	public function __toString()
225 	{
226 		try
227 		{
228 			return $this-&gt;render();
229 		}
230 		catch (Exception $e)
231 		{
232 			/**
233 			 * Display the exception message.

							
								
				
					
													APPPATH\classes\Controller\base.php [ 24 ]
											
					&raquo;
					Kohana_View->__toString()
				
													19 		$a=ORM::factory('main')
20 		-&gt;where('url','=',$url)
21 		-&gt;find();
22 $content=view::factory('v_index');
23 
24 	$this-&gt;template-&gt;$content;
25 	
26 
27 
28 
29 		$this-&gt;template-&gt;block_right = null;

							
								
				
					
													APPPATH\classes\Controller\index.php [ 10 ]
											
					&raquo;
					Controller_Base->before()
				
													 5 class Controller_Index extends Controller_Base {
 6 
 7 	public function before()
 8 	{
 9 	
10 	parent::before();
11 	
12 
13 
14 
15 	}

							
								
				
					
													SYSPATH\classes\Kohana\Controller.php [ 69 ]
											
					&raquo;
					Controller_Index->before()
				
													64 	 * @return  Response
65 	 */
66 	public function execute()
67 	{
68 		// Execute the "before action" method
69 		$this-&gt;before();
70 
71 		// Determine the action to use
72 		$action = 'action_'.$this-&gt;request-&gt;action();
73 
74 		// If the action doesn't exist, it's a 404

							
								
				
					
													{PHP internal call}
											
					&raquo;
					Kohana_Controller->execute()
				
											
								
				
					
													SYSPATH\classes\Kohana\Request\Client\Internal.php [ 97 ]
											
					&raquo;
					ReflectionMethod->invoke(arguments)
				
								
					
											
							0
							object Controller_Index(6) {
    protected user => NULL
    protected auth => object Auth_File(3) {
        protected _users => array(0) 
        protected _session => object Session_Native(5) {
            protected _name => string(7) "session"
            protected _lifetime => integer 0
            protected _encrypted => bool FALSE
            protected _data => array(1) (
                "last_active" => integer 1369834229
            )
            protected _destroyed => bool FALSE
        }
        protected _config => object Config_Group(7) {
            public driver => string(4) "File"
            public hash_method => string(6) "sha256"
            public hash_key => NULL
            public lifetime => integer 1209600
            public session_type => string(6) "native"
            public session_key => string(9) "auth_user"
            public users => array(0) 
        }
    }
    public template => object View(2) {
        protected _file => string(49) "C:\xampp\htdocs\isay\application\views\v_base.php"
        protected _data => array(2) (
            "logged_in" => bool FALSE
            "styles" => array(1) (
                0 => string(23) "media/css/isaystyle.css"
            )
        )
    }
    public auto_render => bool TRUE
    public request => object Request(19) {
        protected _requested_with => NULL
        protected _method => string(3) "GET"
        protected _protocol => string(8) "HTTP/1.1"
        protected _secure => bool FALSE
        protected _referrer => NULL
        protected _route => object Route(5) {
            protected _filters => array(0) 
            protected _uri => string(32) "(&lt;controller&gt;(/&lt;action&gt;(/&lt;id&gt;)))"
            protected _regex => array(0) 
            protected _defaults => array(2) (
                "controller" => string(5) "index"
                "action" => string(5) "index"
            )
            protected _route_regex => string(95) "#^(?:(?P&lt;controller&gt;[^/.,;?\n]++)(?:/(?P&lt;action&gt;[^/.,;?\n]++)(?:/(?P&lt;id&gt;[^/.,;?\n]++))?)?)?$#uD"
        }
        protected _routes => array(0) 
        protected _header => object HTTP_Header(0) {
        }
        protected _body => NULL
        protected _directory => string(0) ""
        protected _controller => string(5) "Index"
        protected _action => string(5) "index"
        protected _uri => string(0) ""
        protected _external => bool FALSE
        protected _params => array(0) 
        protected _get => array(0) 
        protected _post => array(0) 
        protected _cookies => array(1) (
            "session" => NULL
        )
        protected _client => object Request_Client_Internal(9) {
            protected _previous_environment => NULL
            protected _cache => NULL
            protected _follow => bool FALSE
            protected _follow_headers => array(1) (
                0 => string(13) "Authorization"
            )
            protected _strict_redirect => bool TRUE
            protected _header_callbacks => array(1) (
                "Location" => string(34) "Request_Client::on_header_location"
            )
            protected _max_callback_depth => integer 5
            protected _callback_depth => integer 1
            protected _callback_params => array(0) 
        }
    }
    public response => object Response(5) {
        protected _status => integer 200
        protected _header => object HTTP_Header(0) {
        }
        protected _body => string(0) ""
        protected _cookies => array(0) 
        protected _protocol => NULL
    }
}
						
										
				
													 92 
 93 			// Create a new instance of the controller
 94 			$controller = $class-&gt;newInstance($request, $response);
 95 
 96 			// Run the controller's execute() method
 97 			$response = $class-&gt;getMethod('execute')-&gt;invoke($controller);
 98 
 99 			if ( ! $response instanceof Response)
100 			{
101 				// Controller failed to return a Response.
102 				throw new Kohana_Exception('Controller failed to return a Response');

							
								
				
					
													SYSPATH\classes\Kohana\Request\Client.php [ 114 ]
											
					&raquo;
					Kohana_Request_Client_Internal->execute_request(arguments)
				
								
					
											
							0
							object Request(19) {
    protected _requested_with => NULL
    protected _method => string(3) "GET"
    protected _protocol => string(8) "HTTP/1.1"
    protected _secure => bool FALSE
    protected _referrer => NULL
    protected _route => object Route(5) {
        protected _filters => array(0) 
        protected _uri => string(32) "(&lt;controller&gt;(/&lt;action&gt;(/&lt;id&gt;)))"
        protected _regex => array(0) 
        protected _defaults => array(2) (
            "controller" => string(5) "index"
            "action" => string(5) "index"
        )
        protected _route_regex => string(95) "#^(?:(?P&lt;controller&gt;[^/.,;?\n]++)(?:/(?P&lt;action&gt;[^/.,;?\n]++)(?:/(?P&lt;id&gt;[^/.,;?\n]++))?)?)?$#uD"
    }
    protected _routes => array(0) 
    protected _header => object HTTP_Header(0) {
    }
    protected _body => NULL
    protected _directory => string(0) ""
    protected _controller => string(5) "Index"
    protected _action => string(5) "index"
    protected _uri => string(0) ""
    protected _external => bool FALSE
    protected _params => array(0) 
    protected _get => array(0) 
    protected _post => array(0) 
    protected _cookies => array(1) (
        "session" => NULL
    )
    protected _client => object Request_Client_Internal(9) {
        protected _previous_environment => NULL
        protected _cache => NULL
        protected _follow => bool FALSE
        protected _follow_headers => array(1) (
            0 => string(13) "Authorization"
        )
        protected _strict_redirect => bool TRUE
        protected _header_callbacks => array(1) (
            "Location" => string(34) "Request_Client::on_header_location"
        )
        protected _max_callback_depth => integer 5
        protected _callback_depth => integer 1
        protected _callback_params => array(0) 
    }
}
						
											
							1
							object Response(5) {
    protected _status => integer 200
    protected _header => object HTTP_Header(0) {
    }
    protected _body => string(0) ""
    protected _cookies => array(0) 
    protected _protocol => NULL
}
						
										
				
													109 		$orig_response = $response = Response::factory();
110 
111 		if (($cache = $this-&gt;cache()) instanceof HTTP_Cache)
112 			return $cache-&gt;execute($this, $request, $response);
113 
114 		$response = $this-&gt;execute_request($request, $response);
115 
116 		// Execute response callbacks
117 		foreach ($this-&gt;header_callbacks() as $header =&gt; $callback)
118 		{
119 			if ($response-&gt;headers($header))

							
								
				
					
													SYSPATH\classes\Kohana\Request.php [ 990 ]
											
					&raquo;
					Kohana_Request_Client->execute(arguments)
				
								
					
											
							0
							object Request(19) {
    protected _requested_with => NULL
    protected _method => string(3) "GET"
    protected _protocol => string(8) "HTTP/1.1"
    protected _secure => bool FALSE
    protected _referrer => NULL
    protected _route => object Route(5) {
        protected _filters => array(0) 
        protected _uri => string(32) "(&lt;controller&gt;(/&lt;action&gt;(/&lt;id&gt;)))"
        protected _regex => array(0) 
        protected _defaults => array(2) (
            "controller" => string(5) "index"
            "action" => string(5) "index"
        )
        protected _route_regex => string(95) "#^(?:(?P&lt;controller&gt;[^/.,;?\n]++)(?:/(?P&lt;action&gt;[^/.,;?\n]++)(?:/(?P&lt;id&gt;[^/.,;?\n]++))?)?)?$#uD"
    }
    protected _routes => array(0) 
    protected _header => object HTTP_Header(0) {
    }
    protected _body => NULL
    protected _directory => string(0) ""
    protected _controller => string(5) "Index"
    protected _action => string(5) "index"
    protected _uri => string(0) ""
    protected _external => bool FALSE
    protected _params => array(0) 
    protected _get => array(0) 
    protected _post => array(0) 
    protected _cookies => array(1) (
        "session" => NULL
    )
    protected _client => object Request_Client_Internal(9) {
        protected _previous_environment => NULL
        protected _cache => NULL
        protected _follow => bool FALSE
        protected _follow_headers => array(1) (
            0 => string(13) "Authorization"
        )
        protected _strict_redirect => bool TRUE
        protected _header_callbacks => array(1) (
            "Location" => string(34) "Request_Client::on_header_location"
        )
        protected _max_callback_depth => integer 5
        protected _callback_depth => integer 1
        protected _callback_params => array(0) 
    }
}
						
										
				
													985 			throw new Request_Exception('Unable to execute :uri without a Kohana_Request_Client', array(
986 				':uri' =&gt; $this-&gt;_uri,
987 			));
988 		}
989 
990 		return $this-&gt;_client-&gt;execute($this);
991 	}
992 
993 	/**
994 	 * Returns whether this request is the initial request Kohana received.
995 	 * Can be used to test for sub requests.

							
								
				
					
													DOCROOT\index.php [ 118 ]
											
					&raquo;
					Kohana_Request->execute()
				
													113 	/**
114 	 * Execute the main request. A source of the URI can be passed, eg: $_SERVER['PATH_INFO'].
115 	 * If no source is specified, the URI will be automatically detected.
116 	 */
117 	echo Request::factory(TRUE, array(), FALSE)
118 		-&gt;execute()
119 		-&gt;send_headers(TRUE)
120 		-&gt;body();
121 }

							
							
	
	Environment
	
				Included files (106)
		
			
								
					DOCROOT\index.php
				
								
					APPPATH\bootstrap.php
				
								
					SYSPATH\classes\Kohana\Core.php
				
								
					SYSPATH\classes\Kohana.php
				
								
					SYSPATH\classes\I18n.php
				
								
					SYSPATH\classes\Kohana\I18n.php
				
								
					SYSPATH\classes\Kohana\Exception.php
				
								
					SYSPATH\classes\Kohana\Kohana\Exception.php
				
								
					SYSPATH\classes\Log.php
				
								
					SYSPATH\classes\Kohana\Log.php
				
								
					SYSPATH\classes\Config.php
				
								
					SYSPATH\classes\Kohana\Config.php
				
								
					SYSPATH\classes\Log\File.php
				
								
					SYSPATH\classes\Kohana\Log\File.php
				
								
					SYSPATH\classes\Log\Writer.php
				
								
					SYSPATH\classes\Kohana\Log\Writer.php
				
								
					SYSPATH\classes\Config\File.php
				
								
					SYSPATH\classes\Kohana\Config\File.php
				
								
					SYSPATH\classes\Kohana\Config\File\Reader.php
				
								
					SYSPATH\classes\Kohana\Config\Reader.php
				
								
					SYSPATH\classes\Kohana\Config\Source.php
				
								
					SYSPATH\classes\Cookie.php
				
								
					SYSPATH\classes\Kohana\Cookie.php
				
								
					MODPATH\codebench\init.php
				
								
					SYSPATH\classes\Route.php
				
								
					SYSPATH\classes\Kohana\Route.php
				
								
					SYSPATH\classes\Request.php
				
								
					SYSPATH\classes\Kohana\Request.php
				
								
					SYSPATH\classes\HTTP\Request.php
				
								
					SYSPATH\classes\Kohana\HTTP\Request.php
				
								
					SYSPATH\classes\HTTP\Message.php
				
								
					SYSPATH\classes\Kohana\HTTP\Message.php
				
								
					SYSPATH\classes\HTTP\Header.php
				
								
					SYSPATH\classes\Kohana\HTTP\Header.php
				
								
					SYSPATH\classes\Request\Client\Internal.php
				
								
					SYSPATH\classes\Kohana\Request\Client\Internal.php
				
								
					SYSPATH\classes\Request\Client.php
				
								
					SYSPATH\classes\Kohana\Request\Client.php
				
								
					SYSPATH\classes\Arr.php
				
								
					SYSPATH\classes\Kohana\Arr.php
				
								
					SYSPATH\classes\Response.php
				
								
					SYSPATH\classes\Kohana\Response.php
				
								
					SYSPATH\classes\HTTP\Response.php
				
								
					SYSPATH\classes\Kohana\HTTP\Response.php
				
								
					SYSPATH\classes\Profiler.php
				
								
					SYSPATH\classes\Kohana\Profiler.php
				
								
					APPPATH\classes\Controller\index.php
				
								
					APPPATH\classes\Controller\base.php
				
								
					APPPATH\classes\Controller\basefirst.php
				
								
					SYSPATH\classes\Controller\Template.php
				
								
					SYSPATH\classes\Kohana\Controller\Template.php
				
								
					SYSPATH\classes\Controller.php
				
								
					SYSPATH\classes\Kohana\Controller.php
				
								
					SYSPATH\classes\View.php
				
								
					SYSPATH\classes\Kohana\View.php
				
								
					MODPATH\auth\classes\Auth.php
				
								
					MODPATH\auth\classes\Kohana\Auth.php
				
								
					MODPATH\auth\config\auth.php
				
								
					SYSPATH\classes\Session.php
				
								
					SYSPATH\classes\Kohana\Session.php
				
								
					SYSPATH\classes\Config\Group.php
				
								
					SYSPATH\classes\Kohana\Config\Group.php
				
								
					MODPATH\auth\classes\Auth\File.php
				
								
					MODPATH\auth\classes\Kohana\Auth\File.php
				
								
					SYSPATH\config\session.php
				
								
					MODPATH\database\config\session.php
				
								
					SYSPATH\classes\Session\Native.php
				
								
					SYSPATH\classes\Kohana\Session\Native.php
				
								
					MODPATH\orm\classes\ORM.php
				
								
					MODPATH\orm\classes\Kohana\ORM.php
				
								
					SYSPATH\classes\Model.php
				
								
					SYSPATH\classes\Kohana\Model.php
				
								
					APPPATH\classes\Model\main.php
				
								
					SYSPATH\classes\Inflector.php
				
								
					SYSPATH\classes\Kohana\Inflector.php
				
								
					SYSPATH\config\inflector.php
				
								
					MODPATH\database\classes\Database.php
				
								
					MODPATH\database\classes\Kohana\Database.php
				
								
					MODPATH\database\config\database.php
				
								
					APPPATH\config\database.php
				
								
					MODPATH\database\classes\Database\MySQL.php
				
								
					MODPATH\database\classes\Kohana\Database\MySQL.php
				
								
					MODPATH\database\classes\Database\MySQL\Result.php
				
								
					MODPATH\database\classes\Kohana\Database\MySQL\Result.php
				
								
					MODPATH\database\classes\Database\Result.php
				
								
					MODPATH\database\classes\Kohana\Database\Result.php
				
								
					MODPATH\database\classes\DB.php
				
								
					MODPATH\database\classes\Kohana\DB.php
				
								
					MODPATH\database\classes\Database\Query\Builder\Select.php
				
								
					MODPATH\database\classes\Kohana\Database\Query\Builder\Select.php
				
								
					MODPATH\database\classes\Database\Query\Builder\Where.php
				
								
					MODPATH\database\classes\Kohana\Database\Query\Builder\Where.php
				
								
					MODPATH\database\classes\Database\Query\Builder.php
				
								
					MODPATH\database\classes\Kohana\Database\Query\Builder.php
				
								
					MODPATH\database\classes\Database\Query.php
				
								
					MODPATH\database\classes\Kohana\Database\Query.php
				
								
					APPPATH\views\v_index.php
				
								
					SYSPATH\classes\Debug.php
				
								
					SYSPATH\classes\Kohana\Debug.php
				
								
					SYSPATH\classes\Date.php
				
								
					SYSPATH\classes\Kohana\Date.php
				
								
					SYSPATH\views\kohana\error.php
				
								
					SYSPATH\classes\HTML.php
				
								
					SYSPATH\classes\Kohana\HTML.php
				
								
					SYSPATH\classes\UTF8.php
				
								
					SYSPATH\classes\Kohana\UTF8.php
				
							
		
				Loaded extensions (48)
		
			
								
					Core
				
								
					bcmath
				
								
					calendar
				
								
					ctype
				
								
					date
				
								
					ereg
				
								
					filter
				
								
					ftp
				
								
					hash
				
								
					iconv
				
								
					json
				
								
					mcrypt
				
								
					SPL
				
								
					odbc
				
								
					pcre
				
								
					Reflection
				
								
					session
				
								
					standard
				
								
					mysqlnd
				
								
					tokenizer
				
								
					zip
				
								
					zlib
				
								
					libxml
				
								
					dom
				
								
					PDO
				
								
					bz2
				
								
					SimpleXML
				
								
					wddx
				
								
					xml
				
								
					xmlreader
				
								
					xmlwriter
				
								
					apache2handler
				
								
					Phar
				
								
					curl
				
								
					mbstring
				
								
					exif
				
								
					gd
				
								
					gettext
				
								
					mysql
				
								
					mysqli
				
								
					pdo_mysql
				
								
					pdo_sqlite
				
								
					soap
				
								
					sockets
				
								
					sqlite3
				
								
					xmlrpc
				
								
					xsl
				
								
					mhash
				
							
		
						$_SESSION
		
			
								
					last_active
					integer 1369834229
				
							
		
												$_COOKIE
		
			
								
					session
					string(26) "90bmvj8thnbj3mpqk5bqar0441"
				
							
		
						$_SERVER
		
			
								
					MIBDIRS
					string(24) "C:/xampp/php/extras/mibs"
				
								
					MYSQL_HOME
					string(16) "\xampp\mysql\bin"
				
								
					OPENSSL_CONF
					string(31) "C:/xampp/apache/bin/openssl.cnf"
				
								
					PHP_PEAR_SYSCONF_DIR
					string(10) "\xampp\php"
				
								
					PHPRC
					string(10) "\xampp\php"
				
								
					TMP
					string(10) "\xampp\tmp"
				
								
					HTTP_HOST
					string(9) "localhost"
				
								
					HTTP_CONNECTION
					string(10) "keep-alive"
				
								
					HTTP_CACHE_CONTROL
					string(9) "max-age=0"
				
								
					HTTP_ACCEPT
					string(63) "text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8"
				
								
					HTTP_USER_AGENT
					string(101) "Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/27.0.1453.94 Safari/537.36"
				
								
					HTTP_ACCEPT_ENCODING
					string(17) "gzip,deflate,sdch"
				
								
					HTTP_ACCEPT_LANGUAGE
					string(35) "ru-RU,ru;q=0.8,en-US;q=0.6,en;q=0.4"
				
								
					HTTP_COOKIE
					string(34) "session=90bmvj8thnbj3mpqk5bqar0441"
				
								
					PATH
					string(153) "C:\Windows\system32;C:\Windows;C:\Windows\System32\Wbem;C:\Windows\System32\WindowsPowerShell\v1.0\;c:\Program Files\ATI Technol&nbsp;&hellip;"
				
								
					SystemRoot
					string(10) "C:\Windows"
				
								
					COMSPEC
					string(27) "C:\Windows\system32\cmd.exe"
				
								
					PATHEXT
					string(53) ".COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC"
				
								
					WINDIR
					string(10) "C:\Windows"
				
								
					SERVER_SIGNATURE
					string(93) "&lt;address&gt;Apache/2.4.3 (Win32) OpenSSL/1.0.1c PHP/5.4.7 Server at localhost Port 80&lt;/address&gt;
"
				
								
					SERVER_SOFTWARE
					string(45) "Apache/2.4.3 (Win32) OpenSSL/1.0.1c PHP/5.4.7"
				
								
					SERVER_NAME
					string(9) "localhost"
				
								
					SERVER_ADDR
					string(3) "::1"
				
								
					SERVER_PORT
					string(2) "80"
				
								
					REMOTE_ADDR
					string(3) "::1"
				
								
					DOCUMENT_ROOT
					string(15) "C:/xampp/htdocs"
				
								
					REQUEST_SCHEME
					string(4) "http"
				
								
					CONTEXT_PREFIX
					string(0) ""
				
								
					CONTEXT_DOCUMENT_ROOT
					string(15) "C:/xampp/htdocs"
				
								
					SERVER_ADMIN
					string(20) "postmaster@localhost"
				
								
					SCRIPT_FILENAME
					string(30) "C:/xampp/htdocs/isay/index.php"
				
								
					REMOTE_PORT
					string(5) "53543"
				
								
					GATEWAY_INTERFACE
					string(7) "CGI/1.1"
				
								
					SERVER_PROTOCOL
					string(8) "HTTP/1.1"
				
								
					REQUEST_METHOD
					string(3) "GET"
				
								
					QUERY_STRING
					string(0) ""
				
								
					REQUEST_URI
					string(6) "/isay/"
				
								
					SCRIPT_NAME
					string(15) "/isay/index.php"
				
								
					PHP_SELF
					string(15) "/isay/index.php"
				
								
					REQUEST_TIME_FLOAT
					float 1369834308.497
				
								
					REQUEST_TIME
					integer 1369834308
				
							
		
			

 ~ SYSPATH\classes\Kohana\View.php [ 171 ] in C:\xampp\htdocs\isay\application\classes\Controller\base.php:24
2013-05-29 08:31:49 --- DEBUG: #0 C:\xampp\htdocs\isay\application\classes\Controller\base.php(24): Kohana_View->__get('<style type="te...')
#1 C:\xampp\htdocs\isay\application\classes\Controller\index.php(10): Controller_Base->before()
#2 C:\xampp\htdocs\isay\system\classes\Kohana\Controller.php(69): Controller_Index->before()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#5 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\isay\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\isay\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\isay\application\classes\Controller\base.php:24
2013-05-29 08:31:55 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: styles ~ APPPATH\views\v_index.php [ 22 ] in C:\xampp\htdocs\isay\application\views\v_index.php:22
2013-05-29 08:31:55 --- DEBUG: #0 C:\xampp\htdocs\isay\application\views\v_index.php(22): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 22, Array)
#1 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\isay\application\classes\Controller\base.php(24): Kohana_View->__toString()
#5 C:\xampp\htdocs\isay\application\classes\Controller\index.php(10): Controller_Base->before()
#6 C:\xampp\htdocs\isay\system\classes\Kohana\Controller.php(69): Controller_Index->before()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#9 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\xampp\htdocs\isay\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\isay\index.php(118): Kohana_Request->execute()
#12 {main} in C:\xampp\htdocs\isay\application\views\v_index.php:22
2013-05-29 08:31:55 --- CRITICAL: Kohana_Exception [ 0 ]: View variable is not set: 
#kohana_error { background: #ddd; font-size: 1em; font-family:sans-serif; text-align: left; color: #111; }
#kohana_error h1,
#kohana_error h2 { margin: 0; padding: 1em; font-size: 1em; font-weight: normal; background: #911; color: #fff; }
	#kohana_error h1 a,
	#kohana_error h2 a { color: #fff; }
#kohana_error h2 { background: #222; }
#kohana_error h3 { margin: 0; padding: 0.4em 0 0; font-size: 1em; font-weight: normal; }
#kohana_error p { margin: 0; padding: 0.2em 0; }
#kohana_error a { color: #1b323b; }
#kohana_error pre { overflow: auto; white-space: pre-wrap; }
#kohana_error table { width: 100%; display: block; margin: 0 0 0.4em; padding: 0; border-collapse: collapse; background: #fff; }
	#kohana_error table td { border: solid 1px #ddd; text-align: left; vertical-align: top; padding: 0.4em; }
#kohana_error div.content { padding: 0.4em 1em 1em; overflow: hidden; }
#kohana_error pre.source { margin: 0 0 1em; padding: 0.4em; background: #fff; border: dotted 1px #b7c680; line-height: 1.2em; }
	#kohana_error pre.source span.line { display: block; }
	#kohana_error pre.source span.highlight { background: #f0eb96; }
		#kohana_error pre.source span.line span.number { color: #666; }
#kohana_error ol.trace { display: block; margin: 0 0 0 2em; padding: 0; list-style: decimal; }
	#kohana_error ol.trace li { margin: 0; padding: 0; }
.js .collapsed { display: none; }


document.documentElement.className = document.documentElement.className + ' js';
function koggle(elem)
{
	elem = document.getElementById(elem);

	if (elem.style && elem.style['display'])
		// Only works with the "style" attr
		var disp = elem.style['display'];
	else if (elem.currentStyle)
		// For MSIE, naturally
		var disp = elem.currentStyle['display'];
	else if (window.getComputedStyle)
		// For most other browsers
		var disp = document.defaultView.getComputedStyle(elem, null).getPropertyValue('display');

	// Toggle the state of the "display" style
	elem.style.display = disp == 'block' ? 'none' : 'block';
	return false;
}


	ErrorException [ Notice ]: Undefined variable: styles
	
		APPPATH\views\v_index.php [ 22 ]
		17 &lt;style type="text/css"&gt;
18 html .jqueryslidemenu { height: 1%; } /* Holly Hack for IE7 and below */
19 &lt;/style&gt;
20 &lt;![endif]--&gt;
21 		
22 		&lt;?php foreach($styles as $style):?&gt;
23 		&lt;?php echo HTML::style($style); ?&gt;
24 		&lt;?php endforeach;?&gt;
25 		
26 				&lt;?php foreach($scripts as $script):?&gt;
27 		&lt;?php echo HTML::script($script); ?&gt;
		
					
				
					
													APPPATH\views\v_index.php [ 22 ]
											
					&raquo;
					Kohana_Core::error_handler(arguments)
				
								
					
											
							0
							integer 8
						
											
							1
							string(26) "Undefined variable: styles"
						
											
							2
							string(50) "C:\xampp\htdocs\isay\application\views\v_index.php"
						
											
							3
							integer 22
						
											
							4
							array(2) (
    "kohana_view_filename" => string(50) "C:\xampp\htdocs\isay\application\views\v_index.php"
    "kohana_view_data" => array(0) 
)
						
										
				
													17 &lt;style type="text/css"&gt;
18 html .jqueryslidemenu { height: 1%; } /* Holly Hack for IE7 and below */
19 &lt;/style&gt;
20 &lt;![endif]--&gt;
21 		
22 		&lt;?php foreach($styles as $style):?&gt;
23 		&lt;?php echo HTML::style($style); ?&gt;
24 		&lt;?php endforeach;?&gt;
25 		
26 				&lt;?php foreach($scripts as $script):?&gt;
27 		&lt;?php echo HTML::script($script); ?&gt;

							
								
				
					
													SYSPATH\classes\Kohana\View.php [ 61 ]
											
					&raquo;
					include(arguments)
				
								
					
											
							0
							string(50) "C:\xampp\htdocs\isay\application\views\v_index.php"
						
										
				
													56 		ob_start();
57 
58 		try
59 		{
60 			// Load the view within the current scope
61 			include $kohana_view_filename;
62 		}
63 		catch (Exception $e)
64 		{
65 			// Delete the output buffer
66 			ob_end_clean();

							
								
				
					
													SYSPATH\classes\Kohana\View.php [ 348 ]
											
					&raquo;
					Kohana_View::capture(arguments)
				
								
					
											
							0
							string(50) "C:\xampp\htdocs\isay\application\views\v_index.php"
						
											
							1
							array(0) 
						
										
				
													343 		{
344 			throw new View_Exception('You must set the file to use within your view before rendering');
345 		}
346 
347 		// Combine local and global data and capture the output
348 		return View::capture($this-&gt;_file, $this-&gt;_data);
349 	}
350 
351 } // End View

							
								
				
					
													SYSPATH\classes\Kohana\View.php [ 228 ]
											
					&raquo;
					Kohana_View->render()
				
													223 	 */
224 	public function __toString()
225 	{
226 		try
227 		{
228 			return $this-&gt;render();
229 		}
230 		catch (Exception $e)
231 		{
232 			/**
233 			 * Display the exception message.

							
								
				
					
													APPPATH\classes\Controller\base.php [ 24 ]
											
					&raquo;
					Kohana_View->__toString()
				
													19 		$a=ORM::factory('main')
20 		-&gt;where('url','=',$url)
21 		-&gt;find();
22 $content=view::factory('v_index');
23 
24 	$this-&gt;template-&gt;$content;
25 	
26 
27 
28 
29 		$this-&gt;template-&gt;block_right = null;

							
								
				
					
													APPPATH\classes\Controller\index.php [ 10 ]
											
					&raquo;
					Controller_Base->before()
				
													 5 class Controller_Index extends Controller_Base {
 6 
 7 	public function before()
 8 	{
 9 	
10 	parent::before();
11 	
12 
13 
14 
15 	}

							
								
				
					
													SYSPATH\classes\Kohana\Controller.php [ 69 ]
											
					&raquo;
					Controller_Index->before()
				
													64 	 * @return  Response
65 	 */
66 	public function execute()
67 	{
68 		// Execute the "before action" method
69 		$this-&gt;before();
70 
71 		// Determine the action to use
72 		$action = 'action_'.$this-&gt;request-&gt;action();
73 
74 		// If the action doesn't exist, it's a 404

							
								
				
					
													{PHP internal call}
											
					&raquo;
					Kohana_Controller->execute()
				
											
								
				
					
													SYSPATH\classes\Kohana\Request\Client\Internal.php [ 97 ]
											
					&raquo;
					ReflectionMethod->invoke(arguments)
				
								
					
											
							0
							object Controller_Index(6) {
    protected user => NULL
    protected auth => object Auth_File(3) {
        protected _users => array(0) 
        protected _session => object Session_Native(5) {
            protected _name => string(7) "session"
            protected _lifetime => integer 0
            protected _encrypted => bool FALSE
            protected _data => array(1) (
                "last_active" => integer 1369834309
            )
            protected _destroyed => bool FALSE
        }
        protected _config => object Config_Group(7) {
            public driver => string(4) "File"
            public hash_method => string(6) "sha256"
            public hash_key => NULL
            public lifetime => integer 1209600
            public session_type => string(6) "native"
            public session_key => string(9) "auth_user"
            public users => array(0) 
        }
    }
    public template => object View(2) {
        protected _file => string(49) "C:\xampp\htdocs\isay\application\views\v_base.php"
        protected _data => array(2) (
            "logged_in" => bool FALSE
            "styles" => array(1) (
                0 => string(23) "media/css/isaystyle.css"
            )
        )
    }
    public auto_render => bool TRUE
    public request => object Request(19) {
        protected _requested_with => NULL
        protected _method => string(3) "GET"
        protected _protocol => string(8) "HTTP/1.1"
        protected _secure => bool FALSE
        protected _referrer => NULL
        protected _route => object Route(5) {
            protected _filters => array(0) 
            protected _uri => string(32) "(&lt;controller&gt;(/&lt;action&gt;(/&lt;id&gt;)))"
            protected _regex => array(0) 
            protected _defaults => array(2) (
                "controller" => string(5) "index"
                "action" => string(5) "index"
            )
            protected _route_regex => string(95) "#^(?:(?P&lt;controller&gt;[^/.,;?\n]++)(?:/(?P&lt;action&gt;[^/.,;?\n]++)(?:/(?P&lt;id&gt;[^/.,;?\n]++))?)?)?$#uD"
        }
        protected _routes => array(0) 
        protected _header => object HTTP_Header(0) {
        }
        protected _body => NULL
        protected _directory => string(0) ""
        protected _controller => string(5) "Index"
        protected _action => string(5) "index"
        protected _uri => string(0) ""
        protected _external => bool FALSE
        protected _params => array(0) 
        protected _get => array(0) 
        protected _post => array(0) 
        protected _cookies => array(1) (
            "session" => NULL
        )
        protected _client => object Request_Client_Internal(9) {
            protected _previous_environment => NULL
            protected _cache => NULL
            protected _follow => bool FALSE
            protected _follow_headers => array(1) (
                0 => string(13) "Authorization"
            )
            protected _strict_redirect => bool TRUE
            protected _header_callbacks => array(1) (
                "Location" => string(34) "Request_Client::on_header_location"
            )
            protected _max_callback_depth => integer 5
            protected _callback_depth => integer 1
            protected _callback_params => array(0) 
        }
    }
    public response => object Response(5) {
        protected _status => integer 200
        protected _header => object HTTP_Header(0) {
        }
        protected _body => string(0) ""
        protected _cookies => array(0) 
        protected _protocol => NULL
    }
}
						
										
				
													 92 
 93 			// Create a new instance of the controller
 94 			$controller = $class-&gt;newInstance($request, $response);
 95 
 96 			// Run the controller's execute() method
 97 			$response = $class-&gt;getMethod('execute')-&gt;invoke($controller);
 98 
 99 			if ( ! $response instanceof Response)
100 			{
101 				// Controller failed to return a Response.
102 				throw new Kohana_Exception('Controller failed to return a Response');

							
								
				
					
													SYSPATH\classes\Kohana\Request\Client.php [ 114 ]
											
					&raquo;
					Kohana_Request_Client_Internal->execute_request(arguments)
				
								
					
											
							0
							object Request(19) {
    protected _requested_with => NULL
    protected _method => string(3) "GET"
    protected _protocol => string(8) "HTTP/1.1"
    protected _secure => bool FALSE
    protected _referrer => NULL
    protected _route => object Route(5) {
        protected _filters => array(0) 
        protected _uri => string(32) "(&lt;controller&gt;(/&lt;action&gt;(/&lt;id&gt;)))"
        protected _regex => array(0) 
        protected _defaults => array(2) (
            "controller" => string(5) "index"
            "action" => string(5) "index"
        )
        protected _route_regex => string(95) "#^(?:(?P&lt;controller&gt;[^/.,;?\n]++)(?:/(?P&lt;action&gt;[^/.,;?\n]++)(?:/(?P&lt;id&gt;[^/.,;?\n]++))?)?)?$#uD"
    }
    protected _routes => array(0) 
    protected _header => object HTTP_Header(0) {
    }
    protected _body => NULL
    protected _directory => string(0) ""
    protected _controller => string(5) "Index"
    protected _action => string(5) "index"
    protected _uri => string(0) ""
    protected _external => bool FALSE
    protected _params => array(0) 
    protected _get => array(0) 
    protected _post => array(0) 
    protected _cookies => array(1) (
        "session" => NULL
    )
    protected _client => object Request_Client_Internal(9) {
        protected _previous_environment => NULL
        protected _cache => NULL
        protected _follow => bool FALSE
        protected _follow_headers => array(1) (
            0 => string(13) "Authorization"
        )
        protected _strict_redirect => bool TRUE
        protected _header_callbacks => array(1) (
            "Location" => string(34) "Request_Client::on_header_location"
        )
        protected _max_callback_depth => integer 5
        protected _callback_depth => integer 1
        protected _callback_params => array(0) 
    }
}
						
											
							1
							object Response(5) {
    protected _status => integer 200
    protected _header => object HTTP_Header(0) {
    }
    protected _body => string(0) ""
    protected _cookies => array(0) 
    protected _protocol => NULL
}
						
										
				
													109 		$orig_response = $response = Response::factory();
110 
111 		if (($cache = $this-&gt;cache()) instanceof HTTP_Cache)
112 			return $cache-&gt;execute($this, $request, $response);
113 
114 		$response = $this-&gt;execute_request($request, $response);
115 
116 		// Execute response callbacks
117 		foreach ($this-&gt;header_callbacks() as $header =&gt; $callback)
118 		{
119 			if ($response-&gt;headers($header))

							
								
				
					
													SYSPATH\classes\Kohana\Request.php [ 990 ]
											
					&raquo;
					Kohana_Request_Client->execute(arguments)
				
								
					
											
							0
							object Request(19) {
    protected _requested_with => NULL
    protected _method => string(3) "GET"
    protected _protocol => string(8) "HTTP/1.1"
    protected _secure => bool FALSE
    protected _referrer => NULL
    protected _route => object Route(5) {
        protected _filters => array(0) 
        protected _uri => string(32) "(&lt;controller&gt;(/&lt;action&gt;(/&lt;id&gt;)))"
        protected _regex => array(0) 
        protected _defaults => array(2) (
            "controller" => string(5) "index"
            "action" => string(5) "index"
        )
        protected _route_regex => string(95) "#^(?:(?P&lt;controller&gt;[^/.,;?\n]++)(?:/(?P&lt;action&gt;[^/.,;?\n]++)(?:/(?P&lt;id&gt;[^/.,;?\n]++))?)?)?$#uD"
    }
    protected _routes => array(0) 
    protected _header => object HTTP_Header(0) {
    }
    protected _body => NULL
    protected _directory => string(0) ""
    protected _controller => string(5) "Index"
    protected _action => string(5) "index"
    protected _uri => string(0) ""
    protected _external => bool FALSE
    protected _params => array(0) 
    protected _get => array(0) 
    protected _post => array(0) 
    protected _cookies => array(1) (
        "session" => NULL
    )
    protected _client => object Request_Client_Internal(9) {
        protected _previous_environment => NULL
        protected _cache => NULL
        protected _follow => bool FALSE
        protected _follow_headers => array(1) (
            0 => string(13) "Authorization"
        )
        protected _strict_redirect => bool TRUE
        protected _header_callbacks => array(1) (
            "Location" => string(34) "Request_Client::on_header_location"
        )
        protected _max_callback_depth => integer 5
        protected _callback_depth => integer 1
        protected _callback_params => array(0) 
    }
}
						
										
				
													985 			throw new Request_Exception('Unable to execute :uri without a Kohana_Request_Client', array(
986 				':uri' =&gt; $this-&gt;_uri,
987 			));
988 		}
989 
990 		return $this-&gt;_client-&gt;execute($this);
991 	}
992 
993 	/**
994 	 * Returns whether this request is the initial request Kohana received.
995 	 * Can be used to test for sub requests.

							
								
				
					
													DOCROOT\index.php [ 118 ]
											
					&raquo;
					Kohana_Request->execute()
				
													113 	/**
114 	 * Execute the main request. A source of the URI can be passed, eg: $_SERVER['PATH_INFO'].
115 	 * If no source is specified, the URI will be automatically detected.
116 	 */
117 	echo Request::factory(TRUE, array(), FALSE)
118 		-&gt;execute()
119 		-&gt;send_headers(TRUE)
120 		-&gt;body();
121 }

							
							
	
	Environment
	
				Included files (106)
		
			
								
					DOCROOT\index.php
				
								
					APPPATH\bootstrap.php
				
								
					SYSPATH\classes\Kohana\Core.php
				
								
					SYSPATH\classes\Kohana.php
				
								
					SYSPATH\classes\I18n.php
				
								
					SYSPATH\classes\Kohana\I18n.php
				
								
					SYSPATH\classes\Kohana\Exception.php
				
								
					SYSPATH\classes\Kohana\Kohana\Exception.php
				
								
					SYSPATH\classes\Log.php
				
								
					SYSPATH\classes\Kohana\Log.php
				
								
					SYSPATH\classes\Config.php
				
								
					SYSPATH\classes\Kohana\Config.php
				
								
					SYSPATH\classes\Log\File.php
				
								
					SYSPATH\classes\Kohana\Log\File.php
				
								
					SYSPATH\classes\Log\Writer.php
				
								
					SYSPATH\classes\Kohana\Log\Writer.php
				
								
					SYSPATH\classes\Config\File.php
				
								
					SYSPATH\classes\Kohana\Config\File.php
				
								
					SYSPATH\classes\Kohana\Config\File\Reader.php
				
								
					SYSPATH\classes\Kohana\Config\Reader.php
				
								
					SYSPATH\classes\Kohana\Config\Source.php
				
								
					SYSPATH\classes\Cookie.php
				
								
					SYSPATH\classes\Kohana\Cookie.php
				
								
					MODPATH\codebench\init.php
				
								
					SYSPATH\classes\Route.php
				
								
					SYSPATH\classes\Kohana\Route.php
				
								
					SYSPATH\classes\Request.php
				
								
					SYSPATH\classes\Kohana\Request.php
				
								
					SYSPATH\classes\HTTP\Request.php
				
								
					SYSPATH\classes\Kohana\HTTP\Request.php
				
								
					SYSPATH\classes\HTTP\Message.php
				
								
					SYSPATH\classes\Kohana\HTTP\Message.php
				
								
					SYSPATH\classes\HTTP\Header.php
				
								
					SYSPATH\classes\Kohana\HTTP\Header.php
				
								
					SYSPATH\classes\Request\Client\Internal.php
				
								
					SYSPATH\classes\Kohana\Request\Client\Internal.php
				
								
					SYSPATH\classes\Request\Client.php
				
								
					SYSPATH\classes\Kohana\Request\Client.php
				
								
					SYSPATH\classes\Arr.php
				
								
					SYSPATH\classes\Kohana\Arr.php
				
								
					SYSPATH\classes\Response.php
				
								
					SYSPATH\classes\Kohana\Response.php
				
								
					SYSPATH\classes\HTTP\Response.php
				
								
					SYSPATH\classes\Kohana\HTTP\Response.php
				
								
					SYSPATH\classes\Profiler.php
				
								
					SYSPATH\classes\Kohana\Profiler.php
				
								
					APPPATH\classes\Controller\index.php
				
								
					APPPATH\classes\Controller\base.php
				
								
					APPPATH\classes\Controller\basefirst.php
				
								
					SYSPATH\classes\Controller\Template.php
				
								
					SYSPATH\classes\Kohana\Controller\Template.php
				
								
					SYSPATH\classes\Controller.php
				
								
					SYSPATH\classes\Kohana\Controller.php
				
								
					SYSPATH\classes\View.php
				
								
					SYSPATH\classes\Kohana\View.php
				
								
					MODPATH\auth\classes\Auth.php
				
								
					MODPATH\auth\classes\Kohana\Auth.php
				
								
					MODPATH\auth\config\auth.php
				
								
					SYSPATH\classes\Session.php
				
								
					SYSPATH\classes\Kohana\Session.php
				
								
					SYSPATH\classes\Config\Group.php
				
								
					SYSPATH\classes\Kohana\Config\Group.php
				
								
					MODPATH\auth\classes\Auth\File.php
				
								
					MODPATH\auth\classes\Kohana\Auth\File.php
				
								
					SYSPATH\config\session.php
				
								
					MODPATH\database\config\session.php
				
								
					SYSPATH\classes\Session\Native.php
				
								
					SYSPATH\classes\Kohana\Session\Native.php
				
								
					MODPATH\orm\classes\ORM.php
				
								
					MODPATH\orm\classes\Kohana\ORM.php
				
								
					SYSPATH\classes\Model.php
				
								
					SYSPATH\classes\Kohana\Model.php
				
								
					APPPATH\classes\Model\main.php
				
								
					SYSPATH\classes\Inflector.php
				
								
					SYSPATH\classes\Kohana\Inflector.php
				
								
					SYSPATH\config\inflector.php
				
								
					MODPATH\database\classes\Database.php
				
								
					MODPATH\database\classes\Kohana\Database.php
				
								
					MODPATH\database\config\database.php
				
								
					APPPATH\config\database.php
				
								
					MODPATH\database\classes\Database\MySQL.php
				
								
					MODPATH\database\classes\Kohana\Database\MySQL.php
				
								
					MODPATH\database\classes\Database\MySQL\Result.php
				
								
					MODPATH\database\classes\Kohana\Database\MySQL\Result.php
				
								
					MODPATH\database\classes\Database\Result.php
				
								
					MODPATH\database\classes\Kohana\Database\Result.php
				
								
					MODPATH\database\classes\DB.php
				
								
					MODPATH\database\classes\Kohana\DB.php
				
								
					MODPATH\database\classes\Database\Query\Builder\Select.php
				
								
					MODPATH\database\classes\Kohana\Database\Query\Builder\Select.php
				
								
					MODPATH\database\classes\Database\Query\Builder\Where.php
				
								
					MODPATH\database\classes\Kohana\Database\Query\Builder\Where.php
				
								
					MODPATH\database\classes\Database\Query\Builder.php
				
								
					MODPATH\database\classes\Kohana\Database\Query\Builder.php
				
								
					MODPATH\database\classes\Database\Query.php
				
								
					MODPATH\database\classes\Kohana\Database\Query.php
				
								
					APPPATH\views\v_index.php
				
								
					SYSPATH\classes\Debug.php
				
								
					SYSPATH\classes\Kohana\Debug.php
				
								
					SYSPATH\classes\Date.php
				
								
					SYSPATH\classes\Kohana\Date.php
				
								
					SYSPATH\views\kohana\error.php
				
								
					SYSPATH\classes\HTML.php
				
								
					SYSPATH\classes\Kohana\HTML.php
				
								
					SYSPATH\classes\UTF8.php
				
								
					SYSPATH\classes\Kohana\UTF8.php
				
							
		
				Loaded extensions (48)
		
			
								
					Core
				
								
					bcmath
				
								
					calendar
				
								
					ctype
				
								
					date
				
								
					ereg
				
								
					filter
				
								
					ftp
				
								
					hash
				
								
					iconv
				
								
					json
				
								
					mcrypt
				
								
					SPL
				
								
					odbc
				
								
					pcre
				
								
					Reflection
				
								
					session
				
								
					standard
				
								
					mysqlnd
				
								
					tokenizer
				
								
					zip
				
								
					zlib
				
								
					libxml
				
								
					dom
				
								
					PDO
				
								
					bz2
				
								
					SimpleXML
				
								
					wddx
				
								
					xml
				
								
					xmlreader
				
								
					xmlwriter
				
								
					apache2handler
				
								
					Phar
				
								
					curl
				
								
					mbstring
				
								
					exif
				
								
					gd
				
								
					gettext
				
								
					mysql
				
								
					mysqli
				
								
					pdo_mysql
				
								
					pdo_sqlite
				
								
					soap
				
								
					sockets
				
								
					sqlite3
				
								
					xmlrpc
				
								
					xsl
				
								
					mhash
				
							
		
						$_SESSION
		
			
								
					last_active
					integer 1369834309
				
							
		
												$_COOKIE
		
			
								
					session
					string(26) "90bmvj8thnbj3mpqk5bqar0441"
				
							
		
						$_SERVER
		
			
								
					MIBDIRS
					string(24) "C:/xampp/php/extras/mibs"
				
								
					MYSQL_HOME
					string(16) "\xampp\mysql\bin"
				
								
					OPENSSL_CONF
					string(31) "C:/xampp/apache/bin/openssl.cnf"
				
								
					PHP_PEAR_SYSCONF_DIR
					string(10) "\xampp\php"
				
								
					PHPRC
					string(10) "\xampp\php"
				
								
					TMP
					string(10) "\xampp\tmp"
				
								
					HTTP_HOST
					string(9) "localhost"
				
								
					HTTP_CONNECTION
					string(10) "keep-alive"
				
								
					HTTP_CACHE_CONTROL
					string(9) "max-age=0"
				
								
					HTTP_ACCEPT
					string(63) "text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8"
				
								
					HTTP_USER_AGENT
					string(101) "Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/27.0.1453.94 Safari/537.36"
				
								
					HTTP_ACCEPT_ENCODING
					string(17) "gzip,deflate,sdch"
				
								
					HTTP_ACCEPT_LANGUAGE
					string(35) "ru-RU,ru;q=0.8,en-US;q=0.6,en;q=0.4"
				
								
					HTTP_COOKIE
					string(34) "session=90bmvj8thnbj3mpqk5bqar0441"
				
								
					PATH
					string(153) "C:\Windows\system32;C:\Windows;C:\Windows\System32\Wbem;C:\Windows\System32\WindowsPowerShell\v1.0\;c:\Program Files\ATI Technol&nbsp;&hellip;"
				
								
					SystemRoot
					string(10) "C:\Windows"
				
								
					COMSPEC
					string(27) "C:\Windows\system32\cmd.exe"
				
								
					PATHEXT
					string(53) ".COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC"
				
								
					WINDIR
					string(10) "C:\Windows"
				
								
					SERVER_SIGNATURE
					string(93) "&lt;address&gt;Apache/2.4.3 (Win32) OpenSSL/1.0.1c PHP/5.4.7 Server at localhost Port 80&lt;/address&gt;
"
				
								
					SERVER_SOFTWARE
					string(45) "Apache/2.4.3 (Win32) OpenSSL/1.0.1c PHP/5.4.7"
				
								
					SERVER_NAME
					string(9) "localhost"
				
								
					SERVER_ADDR
					string(3) "::1"
				
								
					SERVER_PORT
					string(2) "80"
				
								
					REMOTE_ADDR
					string(3) "::1"
				
								
					DOCUMENT_ROOT
					string(15) "C:/xampp/htdocs"
				
								
					REQUEST_SCHEME
					string(4) "http"
				
								
					CONTEXT_PREFIX
					string(0) ""
				
								
					CONTEXT_DOCUMENT_ROOT
					string(15) "C:/xampp/htdocs"
				
								
					SERVER_ADMIN
					string(20) "postmaster@localhost"
				
								
					SCRIPT_FILENAME
					string(30) "C:/xampp/htdocs/isay/index.php"
				
								
					REMOTE_PORT
					string(5) "53544"
				
								
					GATEWAY_INTERFACE
					string(7) "CGI/1.1"
				
								
					SERVER_PROTOCOL
					string(8) "HTTP/1.1"
				
								
					REQUEST_METHOD
					string(3) "GET"
				
								
					QUERY_STRING
					string(0) ""
				
								
					REQUEST_URI
					string(6) "/isay/"
				
								
					SCRIPT_NAME
					string(15) "/isay/index.php"
				
								
					PHP_SELF
					string(15) "/isay/index.php"
				
								
					REQUEST_TIME_FLOAT
					float 1369834313.809
				
								
					REQUEST_TIME
					integer 1369834313
				
							
		
			

 ~ SYSPATH\classes\Kohana\View.php [ 171 ] in C:\xampp\htdocs\isay\application\classes\Controller\base.php:24
2013-05-29 08:31:55 --- DEBUG: #0 C:\xampp\htdocs\isay\application\classes\Controller\base.php(24): Kohana_View->__get('<style type="te...')
#1 C:\xampp\htdocs\isay\application\classes\Controller\index.php(10): Controller_Base->before()
#2 C:\xampp\htdocs\isay\system\classes\Kohana\Controller.php(69): Controller_Index->before()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#5 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\isay\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\isay\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\isay\application\classes\Controller\base.php:24
2013-05-29 08:32:09 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$name ~ APPPATH\views\v_worldnews.php [ 4 ] in C:\xampp\htdocs\isay\application\views\v_worldnews.php:4
2013-05-29 08:32:09 --- DEBUG: #0 C:\xampp\htdocs\isay\application\views\v_worldnews.php(4): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\xampp\htdocs...', 4, Array)
#1 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\isay\application\views\v_base.php(30): Kohana_View->__toString()
#5 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\isay\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\isay\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#11 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\isay\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\isay\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\isay\application\views\v_worldnews.php:4
2013-05-29 08:36:11 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: block_right ~ APPPATH\views\v_base.php [ 29 ] in C:\xampp\htdocs\isay\application\views\v_base.php:29
2013-05-29 08:36:11 --- DEBUG: #0 C:\xampp\htdocs\isay\application\views\v_base.php(29): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 29, Array)
#1 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\isay\application\views\v_index.php(157): Kohana_View->__toString()
#5 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\isay\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\isay\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#11 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\isay\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\isay\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\isay\application\views\v_base.php:29
2013-05-29 08:37:06 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: block_right ~ APPPATH\views\v_base.php [ 29 ] in C:\xampp\htdocs\isay\application\views\v_base.php:29
2013-05-29 08:37:06 --- DEBUG: #0 C:\xampp\htdocs\isay\application\views\v_base.php(29): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 29, Array)
#1 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\isay\application\views\v_index.php(157): Kohana_View->__toString()
#5 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\isay\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\isay\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#11 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\isay\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\isay\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\isay\application\views\v_base.php:29
2013-05-29 08:41:39 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\classes\Controller\basefirst.php [ 17 ] in :
2013-05-29 08:41:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-29 08:41:53 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: styles ~ APPPATH\views\v_index.php [ 22 ] in C:\xampp\htdocs\isay\application\views\v_index.php:22
2013-05-29 08:41:53 --- DEBUG: #0 C:\xampp\htdocs\isay\application\views\v_index.php(22): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 22, Array)
#1 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\isay\application\classes\Controller\basefirst.php(19): Kohana_View->__toString()
#5 C:\xampp\htdocs\isay\application\classes\Controller\base.php(16): Controller_Basefirst->before()
#6 C:\xampp\htdocs\isay\application\classes\Controller\index.php(10): Controller_Base->before()
#7 C:\xampp\htdocs\isay\system\classes\Kohana\Controller.php(69): Controller_Index->before()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#10 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\xampp\htdocs\isay\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 C:\xampp\htdocs\isay\index.php(118): Kohana_Request->execute()
#13 {main} in C:\xampp\htdocs\isay\application\views\v_index.php:22
2013-05-29 08:41:53 --- CRITICAL: Kohana_Exception [ 0 ]: View variable is not set: 
#kohana_error { background: #ddd; font-size: 1em; font-family:sans-serif; text-align: left; color: #111; }
#kohana_error h1,
#kohana_error h2 { margin: 0; padding: 1em; font-size: 1em; font-weight: normal; background: #911; color: #fff; }
	#kohana_error h1 a,
	#kohana_error h2 a { color: #fff; }
#kohana_error h2 { background: #222; }
#kohana_error h3 { margin: 0; padding: 0.4em 0 0; font-size: 1em; font-weight: normal; }
#kohana_error p { margin: 0; padding: 0.2em 0; }
#kohana_error a { color: #1b323b; }
#kohana_error pre { overflow: auto; white-space: pre-wrap; }
#kohana_error table { width: 100%; display: block; margin: 0 0 0.4em; padding: 0; border-collapse: collapse; background: #fff; }
	#kohana_error table td { border: solid 1px #ddd; text-align: left; vertical-align: top; padding: 0.4em; }
#kohana_error div.content { padding: 0.4em 1em 1em; overflow: hidden; }
#kohana_error pre.source { margin: 0 0 1em; padding: 0.4em; background: #fff; border: dotted 1px #b7c680; line-height: 1.2em; }
	#kohana_error pre.source span.line { display: block; }
	#kohana_error pre.source span.highlight { background: #f0eb96; }
		#kohana_error pre.source span.line span.number { color: #666; }
#kohana_error ol.trace { display: block; margin: 0 0 0 2em; padding: 0; list-style: decimal; }
	#kohana_error ol.trace li { margin: 0; padding: 0; }
.js .collapsed { display: none; }


document.documentElement.className = document.documentElement.className + ' js';
function koggle(elem)
{
	elem = document.getElementById(elem);

	if (elem.style && elem.style['display'])
		// Only works with the "style" attr
		var disp = elem.style['display'];
	else if (elem.currentStyle)
		// For MSIE, naturally
		var disp = elem.currentStyle['display'];
	else if (window.getComputedStyle)
		// For most other browsers
		var disp = document.defaultView.getComputedStyle(elem, null).getPropertyValue('display');

	// Toggle the state of the "display" style
	elem.style.display = disp == 'block' ? 'none' : 'block';
	return false;
}


	ErrorException [ Notice ]: Undefined variable: styles
	
		APPPATH\views\v_index.php [ 22 ]
		17 &lt;style type="text/css"&gt;
18 html .jqueryslidemenu { height: 1%; } /* Holly Hack for IE7 and below */
19 &lt;/style&gt;
20 &lt;![endif]--&gt;
21 		
22 		&lt;?php foreach($styles as $style):?&gt;
23 		&lt;?php echo HTML::style($style); ?&gt;
24 		&lt;?php endforeach;?&gt;
25 		
26 				&lt;?php foreach($scripts as $script):?&gt;
27 		&lt;?php echo HTML::script($script); ?&gt;
		
					
				
					
													APPPATH\views\v_index.php [ 22 ]
											
					&raquo;
					Kohana_Core::error_handler(arguments)
				
								
					
											
							0
							integer 8
						
											
							1
							string(26) "Undefined variable: styles"
						
											
							2
							string(50) "C:\xampp\htdocs\isay\application\views\v_index.php"
						
											
							3
							integer 22
						
											
							4
							array(2) (
    "kohana_view_filename" => string(50) "C:\xampp\htdocs\isay\application\views\v_index.php"
    "kohana_view_data" => array(0) 
)
						
										
				
													17 &lt;style type="text/css"&gt;
18 html .jqueryslidemenu { height: 1%; } /* Holly Hack for IE7 and below */
19 &lt;/style&gt;
20 &lt;![endif]--&gt;
21 		
22 		&lt;?php foreach($styles as $style):?&gt;
23 		&lt;?php echo HTML::style($style); ?&gt;
24 		&lt;?php endforeach;?&gt;
25 		
26 				&lt;?php foreach($scripts as $script):?&gt;
27 		&lt;?php echo HTML::script($script); ?&gt;

							
								
				
					
													SYSPATH\classes\Kohana\View.php [ 61 ]
											
					&raquo;
					include(arguments)
				
								
					
											
							0
							string(50) "C:\xampp\htdocs\isay\application\views\v_index.php"
						
										
				
													56 		ob_start();
57 
58 		try
59 		{
60 			// Load the view within the current scope
61 			include $kohana_view_filename;
62 		}
63 		catch (Exception $e)
64 		{
65 			// Delete the output buffer
66 			ob_end_clean();

							
								
				
					
													SYSPATH\classes\Kohana\View.php [ 348 ]
											
					&raquo;
					Kohana_View::capture(arguments)
				
								
					
											
							0
							string(50) "C:\xampp\htdocs\isay\application\views\v_index.php"
						
											
							1
							array(0) 
						
										
				
													343 		{
344 			throw new View_Exception('You must set the file to use within your view before rendering');
345 		}
346 
347 		// Combine local and global data and capture the output
348 		return View::capture($this-&gt;_file, $this-&gt;_data);
349 	}
350 
351 } // End View

							
								
				
					
													SYSPATH\classes\Kohana\View.php [ 228 ]
											
					&raquo;
					Kohana_View->render()
				
													223 	 */
224 	public function __toString()
225 	{
226 		try
227 		{
228 			return $this-&gt;render();
229 		}
230 		catch (Exception $e)
231 		{
232 			/**
233 			 * Display the exception message.

							
								
				
					
													APPPATH\classes\Controller\basefirst.php [ 19 ]
											
					&raquo;
					Kohana_View->__toString()
				
													14 	
15 	parent::before();
16 	
17 	    $contentt = View::factory('v_index');
18 
19 		  $this-&gt;template-&gt;$contentt;
20 	
21 	
22 	
23    $auth = Auth::instance();
24         $logged_in = $auth-&gt;logged_in('login');

							
								
				
					
													APPPATH\classes\Controller\base.php [ 16 ]
											
					&raquo;
					Controller_Basefirst->before()
				
													11 
12 	public function before()
13 	{
14 	
15 	
16 	parent::before();
17 
18 	$url=$this-&gt;request-&gt;param('id');
19 		$a=ORM::factory('main')
20 		-&gt;where('url','=',$url)
21 		-&gt;find();

							
								
				
					
													APPPATH\classes\Controller\index.php [ 10 ]
											
					&raquo;
					Controller_Base->before()
				
													 5 class Controller_Index extends Controller_Base {
 6 
 7 	public function before()
 8 	{
 9 	
10 	parent::before();
11 	
12 
13 
14 
15 	}

							
								
				
					
													SYSPATH\classes\Kohana\Controller.php [ 69 ]
											
					&raquo;
					Controller_Index->before()
				
													64 	 * @return  Response
65 	 */
66 	public function execute()
67 	{
68 		// Execute the "before action" method
69 		$this-&gt;before();
70 
71 		// Determine the action to use
72 		$action = 'action_'.$this-&gt;request-&gt;action();
73 
74 		// If the action doesn't exist, it's a 404

							
								
				
					
													{PHP internal call}
											
					&raquo;
					Kohana_Controller->execute()
				
											
								
				
					
													SYSPATH\classes\Kohana\Request\Client\Internal.php [ 97 ]
											
					&raquo;
					ReflectionMethod->invoke(arguments)
				
								
					
											
							0
							object Controller_Index(6) {
    protected user => NULL
    protected auth => NULL
    public template => object View(2) {
        protected _file => string(49) "C:\xampp\htdocs\isay\application\views\v_base.php"
        protected _data => array(0) 
    }
    public auto_render => bool TRUE
    public request => object Request(19) {
        protected _requested_with => NULL
        protected _method => string(3) "GET"
        protected _protocol => string(8) "HTTP/1.1"
        protected _secure => bool FALSE
        protected _referrer => NULL
        protected _route => object Route(5) {
            protected _filters => array(0) 
            protected _uri => string(32) "(&lt;controller&gt;(/&lt;action&gt;(/&lt;id&gt;)))"
            protected _regex => array(0) 
            protected _defaults => array(2) (
                "controller" => string(5) "index"
                "action" => string(5) "index"
            )
            protected _route_regex => string(95) "#^(?:(?P&lt;controller&gt;[^/.,;?\n]++)(?:/(?P&lt;action&gt;[^/.,;?\n]++)(?:/(?P&lt;id&gt;[^/.,;?\n]++))?)?)?$#uD"
        }
        protected _routes => array(0) 
        protected _header => object HTTP_Header(0) {
        }
        protected _body => NULL
        protected _directory => string(0) ""
        protected _controller => string(5) "Index"
        protected _action => string(5) "index"
        protected _uri => string(0) ""
        protected _external => bool FALSE
        protected _params => array(0) 
        protected _get => array(0) 
        protected _post => array(0) 
        protected _cookies => array(1) (
            "session" => NULL
        )
        protected _client => object Request_Client_Internal(9) {
            protected _previous_environment => NULL
            protected _cache => NULL
            protected _follow => bool FALSE
            protected _follow_headers => array(1) (
                0 => string(13) "Authorization"
            )
            protected _strict_redirect => bool TRUE
            protected _header_callbacks => array(1) (
                "Location" => string(34) "Request_Client::on_header_location"
            )
            protected _max_callback_depth => integer 5
            protected _callback_depth => integer 1
            protected _callback_params => array(0) 
        }
    }
    public response => object Response(5) {
        protected _status => integer 200
        protected _header => object HTTP_Header(0) {
        }
        protected _body => string(0) ""
        protected _cookies => array(0) 
        protected _protocol => NULL
    }
}
						
										
				
													 92 
 93 			// Create a new instance of the controller
 94 			$controller = $class-&gt;newInstance($request, $response);
 95 
 96 			// Run the controller's execute() method
 97 			$response = $class-&gt;getMethod('execute')-&gt;invoke($controller);
 98 
 99 			if ( ! $response instanceof Response)
100 			{
101 				// Controller failed to return a Response.
102 				throw new Kohana_Exception('Controller failed to return a Response');

							
								
				
					
													SYSPATH\classes\Kohana\Request\Client.php [ 114 ]
											
					&raquo;
					Kohana_Request_Client_Internal->execute_request(arguments)
				
								
					
											
							0
							object Request(19) {
    protected _requested_with => NULL
    protected _method => string(3) "GET"
    protected _protocol => string(8) "HTTP/1.1"
    protected _secure => bool FALSE
    protected _referrer => NULL
    protected _route => object Route(5) {
        protected _filters => array(0) 
        protected _uri => string(32) "(&lt;controller&gt;(/&lt;action&gt;(/&lt;id&gt;)))"
        protected _regex => array(0) 
        protected _defaults => array(2) (
            "controller" => string(5) "index"
            "action" => string(5) "index"
        )
        protected _route_regex => string(95) "#^(?:(?P&lt;controller&gt;[^/.,;?\n]++)(?:/(?P&lt;action&gt;[^/.,;?\n]++)(?:/(?P&lt;id&gt;[^/.,;?\n]++))?)?)?$#uD"
    }
    protected _routes => array(0) 
    protected _header => object HTTP_Header(0) {
    }
    protected _body => NULL
    protected _directory => string(0) ""
    protected _controller => string(5) "Index"
    protected _action => string(5) "index"
    protected _uri => string(0) ""
    protected _external => bool FALSE
    protected _params => array(0) 
    protected _get => array(0) 
    protected _post => array(0) 
    protected _cookies => array(1) (
        "session" => NULL
    )
    protected _client => object Request_Client_Internal(9) {
        protected _previous_environment => NULL
        protected _cache => NULL
        protected _follow => bool FALSE
        protected _follow_headers => array(1) (
            0 => string(13) "Authorization"
        )
        protected _strict_redirect => bool TRUE
        protected _header_callbacks => array(1) (
            "Location" => string(34) "Request_Client::on_header_location"
        )
        protected _max_callback_depth => integer 5
        protected _callback_depth => integer 1
        protected _callback_params => array(0) 
    }
}
						
											
							1
							object Response(5) {
    protected _status => integer 200
    protected _header => object HTTP_Header(0) {
    }
    protected _body => string(0) ""
    protected _cookies => array(0) 
    protected _protocol => NULL
}
						
										
				
													109 		$orig_response = $response = Response::factory();
110 
111 		if (($cache = $this-&gt;cache()) instanceof HTTP_Cache)
112 			return $cache-&gt;execute($this, $request, $response);
113 
114 		$response = $this-&gt;execute_request($request, $response);
115 
116 		// Execute response callbacks
117 		foreach ($this-&gt;header_callbacks() as $header =&gt; $callback)
118 		{
119 			if ($response-&gt;headers($header))

							
								
				
					
													SYSPATH\classes\Kohana\Request.php [ 990 ]
											
					&raquo;
					Kohana_Request_Client->execute(arguments)
				
								
					
											
							0
							object Request(19) {
    protected _requested_with => NULL
    protected _method => string(3) "GET"
    protected _protocol => string(8) "HTTP/1.1"
    protected _secure => bool FALSE
    protected _referrer => NULL
    protected _route => object Route(5) {
        protected _filters => array(0) 
        protected _uri => string(32) "(&lt;controller&gt;(/&lt;action&gt;(/&lt;id&gt;)))"
        protected _regex => array(0) 
        protected _defaults => array(2) (
            "controller" => string(5) "index"
            "action" => string(5) "index"
        )
        protected _route_regex => string(95) "#^(?:(?P&lt;controller&gt;[^/.,;?\n]++)(?:/(?P&lt;action&gt;[^/.,;?\n]++)(?:/(?P&lt;id&gt;[^/.,;?\n]++))?)?)?$#uD"
    }
    protected _routes => array(0) 
    protected _header => object HTTP_Header(0) {
    }
    protected _body => NULL
    protected _directory => string(0) ""
    protected _controller => string(5) "Index"
    protected _action => string(5) "index"
    protected _uri => string(0) ""
    protected _external => bool FALSE
    protected _params => array(0) 
    protected _get => array(0) 
    protected _post => array(0) 
    protected _cookies => array(1) (
        "session" => NULL
    )
    protected _client => object Request_Client_Internal(9) {
        protected _previous_environment => NULL
        protected _cache => NULL
        protected _follow => bool FALSE
        protected _follow_headers => array(1) (
            0 => string(13) "Authorization"
        )
        protected _strict_redirect => bool TRUE
        protected _header_callbacks => array(1) (
            "Location" => string(34) "Request_Client::on_header_location"
        )
        protected _max_callback_depth => integer 5
        protected _callback_depth => integer 1
        protected _callback_params => array(0) 
    }
}
						
										
				
													985 			throw new Request_Exception('Unable to execute :uri without a Kohana_Request_Client', array(
986 				':uri' =&gt; $this-&gt;_uri,
987 			));
988 		}
989 
990 		return $this-&gt;_client-&gt;execute($this);
991 	}
992 
993 	/**
994 	 * Returns whether this request is the initial request Kohana received.
995 	 * Can be used to test for sub requests.

							
								
				
					
													DOCROOT\index.php [ 118 ]
											
					&raquo;
					Kohana_Request->execute()
				
													113 	/**
114 	 * Execute the main request. A source of the URI can be passed, eg: $_SERVER['PATH_INFO'].
115 	 * If no source is specified, the URI will be automatically detected.
116 	 */
117 	echo Request::factory(TRUE, array(), FALSE)
118 		-&gt;execute()
119 		-&gt;send_headers(TRUE)
120 		-&gt;body();
121 }

							
							
	
	Environment
	
				Included files (65)
		
			
								
					DOCROOT\index.php
				
								
					APPPATH\bootstrap.php
				
								
					SYSPATH\classes\Kohana\Core.php
				
								
					SYSPATH\classes\Kohana.php
				
								
					SYSPATH\classes\I18n.php
				
								
					SYSPATH\classes\Kohana\I18n.php
				
								
					SYSPATH\classes\Kohana\Exception.php
				
								
					SYSPATH\classes\Kohana\Kohana\Exception.php
				
								
					SYSPATH\classes\Log.php
				
								
					SYSPATH\classes\Kohana\Log.php
				
								
					SYSPATH\classes\Config.php
				
								
					SYSPATH\classes\Kohana\Config.php
				
								
					SYSPATH\classes\Log\File.php
				
								
					SYSPATH\classes\Kohana\Log\File.php
				
								
					SYSPATH\classes\Log\Writer.php
				
								
					SYSPATH\classes\Kohana\Log\Writer.php
				
								
					SYSPATH\classes\Config\File.php
				
								
					SYSPATH\classes\Kohana\Config\File.php
				
								
					SYSPATH\classes\Kohana\Config\File\Reader.php
				
								
					SYSPATH\classes\Kohana\Config\Reader.php
				
								
					SYSPATH\classes\Kohana\Config\Source.php
				
								
					SYSPATH\classes\Cookie.php
				
								
					SYSPATH\classes\Kohana\Cookie.php
				
								
					MODPATH\codebench\init.php
				
								
					SYSPATH\classes\Route.php
				
								
					SYSPATH\classes\Kohana\Route.php
				
								
					SYSPATH\classes\Request.php
				
								
					SYSPATH\classes\Kohana\Request.php
				
								
					SYSPATH\classes\HTTP\Request.php
				
								
					SYSPATH\classes\Kohana\HTTP\Request.php
				
								
					SYSPATH\classes\HTTP\Message.php
				
								
					SYSPATH\classes\Kohana\HTTP\Message.php
				
								
					SYSPATH\classes\HTTP\Header.php
				
								
					SYSPATH\classes\Kohana\HTTP\Header.php
				
								
					SYSPATH\classes\Request\Client\Internal.php
				
								
					SYSPATH\classes\Kohana\Request\Client\Internal.php
				
								
					SYSPATH\classes\Request\Client.php
				
								
					SYSPATH\classes\Kohana\Request\Client.php
				
								
					SYSPATH\classes\Arr.php
				
								
					SYSPATH\classes\Kohana\Arr.php
				
								
					SYSPATH\classes\Response.php
				
								
					SYSPATH\classes\Kohana\Response.php
				
								
					SYSPATH\classes\HTTP\Response.php
				
								
					SYSPATH\classes\Kohana\HTTP\Response.php
				
								
					SYSPATH\classes\Profiler.php
				
								
					SYSPATH\classes\Kohana\Profiler.php
				
								
					APPPATH\classes\Controller\index.php
				
								
					APPPATH\classes\Controller\base.php
				
								
					APPPATH\classes\Controller\basefirst.php
				
								
					SYSPATH\classes\Controller\Template.php
				
								
					SYSPATH\classes\Kohana\Controller\Template.php
				
								
					SYSPATH\classes\Controller.php
				
								
					SYSPATH\classes\Kohana\Controller.php
				
								
					SYSPATH\classes\View.php
				
								
					SYSPATH\classes\Kohana\View.php
				
								
					APPPATH\views\v_index.php
				
								
					SYSPATH\classes\Debug.php
				
								
					SYSPATH\classes\Kohana\Debug.php
				
								
					SYSPATH\classes\Date.php
				
								
					SYSPATH\classes\Kohana\Date.php
				
								
					SYSPATH\views\kohana\error.php
				
								
					SYSPATH\classes\HTML.php
				
								
					SYSPATH\classes\Kohana\HTML.php
				
								
					SYSPATH\classes\UTF8.php
				
								
					SYSPATH\classes\Kohana\UTF8.php
				
							
		
				Loaded extensions (48)
		
			
								
					Core
				
								
					bcmath
				
								
					calendar
				
								
					ctype
				
								
					date
				
								
					ereg
				
								
					filter
				
								
					ftp
				
								
					hash
				
								
					iconv
				
								
					json
				
								
					mcrypt
				
								
					SPL
				
								
					odbc
				
								
					pcre
				
								
					Reflection
				
								
					session
				
								
					standard
				
								
					mysqlnd
				
								
					tokenizer
				
								
					zip
				
								
					zlib
				
								
					libxml
				
								
					dom
				
								
					PDO
				
								
					bz2
				
								
					SimpleXML
				
								
					wddx
				
								
					xml
				
								
					xmlreader
				
								
					xmlwriter
				
								
					apache2handler
				
								
					Phar
				
								
					curl
				
								
					mbstring
				
								
					exif
				
								
					gd
				
								
					gettext
				
								
					mysql
				
								
					mysqli
				
								
					pdo_mysql
				
								
					pdo_sqlite
				
								
					soap
				
								
					sockets
				
								
					sqlite3
				
								
					xmlrpc
				
								
					xsl
				
								
					mhash
				
							
		
														$_COOKIE
		
			
								
					session
					string(26) "90bmvj8thnbj3mpqk5bqar0441"
				
							
		
						$_SERVER
		
			
								
					MIBDIRS
					string(24) "C:/xampp/php/extras/mibs"
				
								
					MYSQL_HOME
					string(16) "\xampp\mysql\bin"
				
								
					OPENSSL_CONF
					string(31) "C:/xampp/apache/bin/openssl.cnf"
				
								
					PHP_PEAR_SYSCONF_DIR
					string(10) "\xampp\php"
				
								
					PHPRC
					string(10) "\xampp\php"
				
								
					TMP
					string(10) "\xampp\tmp"
				
								
					HTTP_HOST
					string(9) "localhost"
				
								
					HTTP_CONNECTION
					string(10) "keep-alive"
				
								
					HTTP_CACHE_CONTROL
					string(9) "max-age=0"
				
								
					HTTP_ACCEPT
					string(63) "text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8"
				
								
					HTTP_USER_AGENT
					string(101) "Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/27.0.1453.94 Safari/537.36"
				
								
					HTTP_ACCEPT_ENCODING
					string(17) "gzip,deflate,sdch"
				
								
					HTTP_ACCEPT_LANGUAGE
					string(35) "ru-RU,ru;q=0.8,en-US;q=0.6,en;q=0.4"
				
								
					HTTP_COOKIE
					string(34) "session=90bmvj8thnbj3mpqk5bqar0441"
				
								
					PATH
					string(153) "C:\Windows\system32;C:\Windows;C:\Windows\System32\Wbem;C:\Windows\System32\WindowsPowerShell\v1.0\;c:\Program Files\ATI Technol&nbsp;&hellip;"
				
								
					SystemRoot
					string(10) "C:\Windows"
				
								
					COMSPEC
					string(27) "C:\Windows\system32\cmd.exe"
				
								
					PATHEXT
					string(53) ".COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC"
				
								
					WINDIR
					string(10) "C:\Windows"
				
								
					SERVER_SIGNATURE
					string(93) "&lt;address&gt;Apache/2.4.3 (Win32) OpenSSL/1.0.1c PHP/5.4.7 Server at localhost Port 80&lt;/address&gt;
"
				
								
					SERVER_SOFTWARE
					string(45) "Apache/2.4.3 (Win32) OpenSSL/1.0.1c PHP/5.4.7"
				
								
					SERVER_NAME
					string(9) "localhost"
				
								
					SERVER_ADDR
					string(3) "::1"
				
								
					SERVER_PORT
					string(2) "80"
				
								
					REMOTE_ADDR
					string(3) "::1"
				
								
					DOCUMENT_ROOT
					string(15) "C:/xampp/htdocs"
				
								
					REQUEST_SCHEME
					string(4) "http"
				
								
					CONTEXT_PREFIX
					string(0) ""
				
								
					CONTEXT_DOCUMENT_ROOT
					string(15) "C:/xampp/htdocs"
				
								
					SERVER_ADMIN
					string(20) "postmaster@localhost"
				
								
					SCRIPT_FILENAME
					string(30) "C:/xampp/htdocs/isay/index.php"
				
								
					REMOTE_PORT
					string(5) "53608"
				
								
					GATEWAY_INTERFACE
					string(7) "CGI/1.1"
				
								
					SERVER_PROTOCOL
					string(8) "HTTP/1.1"
				
								
					REQUEST_METHOD
					string(3) "GET"
				
								
					QUERY_STRING
					string(0) ""
				
								
					REQUEST_URI
					string(6) "/isay/"
				
								
					SCRIPT_NAME
					string(15) "/isay/index.php"
				
								
					PHP_SELF
					string(15) "/isay/index.php"
				
								
					REQUEST_TIME_FLOAT
					float 1369834913.034
				
								
					REQUEST_TIME
					integer 1369834913
				
							
		
			

 ~ SYSPATH\classes\Kohana\View.php [ 171 ] in C:\xampp\htdocs\isay\application\classes\Controller\basefirst.php:19
2013-05-29 08:41:53 --- DEBUG: #0 C:\xampp\htdocs\isay\application\classes\Controller\basefirst.php(19): Kohana_View->__get('<style type="te...')
#1 C:\xampp\htdocs\isay\application\classes\Controller\base.php(16): Controller_Basefirst->before()
#2 C:\xampp\htdocs\isay\application\classes\Controller\index.php(10): Controller_Base->before()
#3 C:\xampp\htdocs\isay\system\classes\Kohana\Controller.php(69): Controller_Index->before()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#6 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\isay\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\isay\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\isay\application\classes\Controller\basefirst.php:19
2013-05-29 08:44:07 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: styles ~ APPPATH\views\v_index.php [ 22 ] in C:\xampp\htdocs\isay\application\views\v_index.php:22
2013-05-29 08:44:07 --- DEBUG: #0 C:\xampp\htdocs\isay\application\views\v_index.php(22): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 22, Array)
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
#14 {main} in C:\xampp\htdocs\isay\application\views\v_index.php:22
2013-05-29 08:44:07 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$name ~ APPPATH\views\v_worldnews.php [ 4 ] in C:\xampp\htdocs\isay\application\views\v_worldnews.php:4
2013-05-29 08:44:07 --- DEBUG: #0 C:\xampp\htdocs\isay\application\views\v_worldnews.php(4): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\xampp\htdocs...', 4, Array)
#1 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\isay\application\views\v_base.php(30): Kohana_View->__toString()
#5 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\isay\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\isay\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#11 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\isay\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\isay\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\isay\application\views\v_worldnews.php:4
2013-05-29 08:45:12 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: styles ~ APPPATH\views\v_index.php [ 22 ] in C:\xampp\htdocs\isay\application\views\v_index.php:22
2013-05-29 08:45:12 --- DEBUG: #0 C:\xampp\htdocs\isay\application\views\v_index.php(22): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 22, Array)
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
#14 {main} in C:\xampp\htdocs\isay\application\views\v_index.php:22
2013-05-29 08:45:12 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$name ~ APPPATH\views\v_worldnews.php [ 4 ] in C:\xampp\htdocs\isay\application\views\v_worldnews.php:4
2013-05-29 08:45:12 --- DEBUG: #0 C:\xampp\htdocs\isay\application\views\v_worldnews.php(4): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\xampp\htdocs...', 4, Array)
#1 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\isay\application\views\v_base.php(36): Kohana_View->__toString()
#5 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\isay\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\isay\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#11 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\isay\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\isay\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\isay\application\views\v_worldnews.php:4
2013-05-29 08:45:34 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: styles ~ APPPATH\views\v_index.php [ 22 ] in C:\xampp\htdocs\isay\application\views\v_index.php:22
2013-05-29 08:45:34 --- DEBUG: #0 C:\xampp\htdocs\isay\application\views\v_index.php(22): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 22, Array)
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
#14 {main} in C:\xampp\htdocs\isay\application\views\v_index.php:22
2013-05-29 08:45:34 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$name ~ APPPATH\views\v_worldnews.php [ 4 ] in C:\xampp\htdocs\isay\application\views\v_worldnews.php:4
2013-05-29 08:45:34 --- DEBUG: #0 C:\xampp\htdocs\isay\application\views\v_worldnews.php(4): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\xampp\htdocs...', 4, Array)
#1 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\isay\application\views\v_base.php(36): Kohana_View->__toString()
#5 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\isay\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\isay\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#11 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\isay\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\isay\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\isay\application\views\v_worldnews.php:4
2013-05-29 08:45:39 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: styles ~ APPPATH\views\v_index.php [ 22 ] in C:\xampp\htdocs\isay\application\views\v_index.php:22
2013-05-29 08:45:39 --- DEBUG: #0 C:\xampp\htdocs\isay\application\views\v_index.php(22): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 22, Array)
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
#14 {main} in C:\xampp\htdocs\isay\application\views\v_index.php:22
2013-05-29 08:45:39 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$name ~ APPPATH\views\v_worldnews.php [ 4 ] in C:\xampp\htdocs\isay\application\views\v_worldnews.php:4
2013-05-29 08:45:39 --- DEBUG: #0 C:\xampp\htdocs\isay\application\views\v_worldnews.php(4): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\xampp\htdocs...', 4, Array)
#1 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\isay\application\views\v_base.php(36): Kohana_View->__toString()
#5 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\isay\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\isay\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#11 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\isay\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\isay\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\isay\application\views\v_worldnews.php:4
2013-05-29 08:46:03 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: mainblock ~ APPPATH\views\v_index.php [ 151 ] in C:\xampp\htdocs\isay\application\views\v_index.php:151
2013-05-29 08:46:03 --- DEBUG: #0 C:\xampp\htdocs\isay\application\views\v_index.php(151): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 151, Array)
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
#14 {main} in C:\xampp\htdocs\isay\application\views\v_index.php:151
2013-05-29 08:46:03 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$name ~ APPPATH\views\v_worldnews.php [ 4 ] in C:\xampp\htdocs\isay\application\views\v_worldnews.php:4
2013-05-29 08:46:03 --- DEBUG: #0 C:\xampp\htdocs\isay\application\views\v_worldnews.php(4): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\xampp\htdocs...', 4, Array)
#1 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\isay\application\views\v_base.php(36): Kohana_View->__toString()
#5 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\isay\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\isay\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#11 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\isay\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\isay\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\isay\application\views\v_worldnews.php:4
2013-05-29 08:46:14 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$name ~ APPPATH\views\v_worldnews.php [ 4 ] in C:\xampp\htdocs\isay\application\views\v_worldnews.php:4
2013-05-29 08:46:14 --- DEBUG: #0 C:\xampp\htdocs\isay\application\views\v_worldnews.php(4): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\xampp\htdocs...', 4, Array)
#1 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\isay\application\views\v_base.php(36): Kohana_View->__toString()
#5 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\isay\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\isay\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#11 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\isay\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\isay\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\isay\application\views\v_worldnews.php:4
2013-05-29 08:46:41 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$name ~ APPPATH\views\v_worldnews.php [ 4 ] in C:\xampp\htdocs\isay\application\views\v_worldnews.php:4
2013-05-29 08:46:41 --- DEBUG: #0 C:\xampp\htdocs\isay\application\views\v_worldnews.php(4): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\xampp\htdocs...', 4, Array)
#1 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\isay\application\views\v_base.php(36): Kohana_View->__toString()
#5 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\isay\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\isay\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#11 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\isay\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\isay\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\isay\application\views\v_worldnews.php:4
2013-05-29 08:47:10 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$name ~ APPPATH\views\v_worldnews.php [ 4 ] in C:\xampp\htdocs\isay\application\views\v_worldnews.php:4
2013-05-29 08:47:10 --- DEBUG: #0 C:\xampp\htdocs\isay\application\views\v_worldnews.php(4): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\xampp\htdocs...', 4, Array)
#1 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\isay\application\views\v_base.php(36): Kohana_View->__toString()
#5 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\isay\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\isay\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#11 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\isay\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\isay\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\isay\application\views\v_worldnews.php:4
2013-05-29 08:49:49 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '$worldnews' (T_VARIABLE) ~ APPPATH\classes\Controller\index.php [ 35 ] in :
2013-05-29 08:49:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-29 08:50:38 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '$worldnews' (T_VARIABLE) ~ APPPATH\classes\Controller\index.php [ 35 ] in :
2013-05-29 08:50:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-29 08:51:53 --- CRITICAL: Kohana_Exception [ 0 ]: The body property does not exist in the Model_Worldnew class ~ MODPATH\orm\classes\Kohana\ORM.php [ 757 ] in C:\xampp\htdocs\isay\modules\orm\classes\Kohana\ORM.php:699
2013-05-29 08:51:53 --- DEBUG: #0 C:\xampp\htdocs\isay\modules\orm\classes\Kohana\ORM.php(699): Kohana_ORM->set('body', 'text for firstn...')
#1 C:\xampp\htdocs\isay\application\classes\Controller\index.php(36): Kohana_ORM->__set('body', 'text for firstn...')
#2 C:\xampp\htdocs\isay\system\classes\Kohana\Controller.php(84): Controller_Index->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#5 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\isay\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\isay\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\isay\modules\orm\classes\Kohana\ORM.php:699
2013-05-29 08:53:53 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$name ~ APPPATH\views\v_worldnews.php [ 4 ] in C:\xampp\htdocs\isay\application\views\v_worldnews.php:4
2013-05-29 08:53:53 --- DEBUG: #0 C:\xampp\htdocs\isay\application\views\v_worldnews.php(4): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\xampp\htdocs...', 4, Array)
#1 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\isay\application\views\v_base.php(36): Kohana_View->__toString()
#5 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\isay\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\isay\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#11 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\isay\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\isay\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\isay\application\views\v_worldnews.php:4
2013-05-29 08:55:23 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: worldnews ~ APPPATH\views\v_worldnews.php [ 4 ] in C:\xampp\htdocs\isay\application\views\v_worldnews.php:4
2013-05-29 08:55:23 --- DEBUG: #0 C:\xampp\htdocs\isay\application\views\v_worldnews.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 4, Array)
#1 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\isay\application\views\v_base.php(36): Kohana_View->__toString()
#5 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\isay\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\isay\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#11 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\isay\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\isay\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\isay\application\views\v_worldnews.php:4
2013-05-29 09:00:53 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: news ~ APPPATH\views\v_worldnews.php [ 4 ] in C:\xampp\htdocs\isay\application\views\v_worldnews.php:4
2013-05-29 09:00:53 --- DEBUG: #0 C:\xampp\htdocs\isay\application\views\v_worldnews.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 4, Array)
#1 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\isay\application\views\v_base.php(36): Kohana_View->__toString()
#5 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\isay\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\isay\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#11 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\isay\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\isay\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\isay\application\views\v_worldnews.php:4
2013-05-29 09:01:18 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$name ~ APPPATH\views\v_worldnews.php [ 4 ] in C:\xampp\htdocs\isay\application\views\v_worldnews.php:4
2013-05-29 09:01:18 --- DEBUG: #0 C:\xampp\htdocs\isay\application\views\v_worldnews.php(4): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\xampp\htdocs...', 4, Array)
#1 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\isay\application\views\v_base.php(36): Kohana_View->__toString()
#5 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\isay\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\isay\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#11 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\isay\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\isay\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\isay\application\views\v_worldnews.php:4
2013-05-29 09:03:03 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$name ~ APPPATH\views\v_worldnews.php [ 4 ] in C:\xampp\htdocs\isay\application\views\v_worldnews.php:4
2013-05-29 09:03:03 --- DEBUG: #0 C:\xampp\htdocs\isay\application\views\v_worldnews.php(4): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\xampp\htdocs...', 4, Array)
#1 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\isay\application\views\v_base.php(36): Kohana_View->__toString()
#5 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\isay\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\isay\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#11 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\isay\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\isay\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\isay\application\views\v_worldnews.php:4
2013-05-29 09:03:07 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$name ~ APPPATH\views\v_worldnews.php [ 4 ] in C:\xampp\htdocs\isay\application\views\v_worldnews.php:4
2013-05-29 09:03:07 --- DEBUG: #0 C:\xampp\htdocs\isay\application\views\v_worldnews.php(4): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\xampp\htdocs...', 4, Array)
#1 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\isay\application\views\v_base.php(36): Kohana_View->__toString()
#5 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\isay\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\isay\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#11 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\isay\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\isay\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\isay\application\views\v_worldnews.php:4
2013-05-29 09:04:20 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$name ~ APPPATH\views\v_worldnews.php [ 4 ] in C:\xampp\htdocs\isay\application\views\v_worldnews.php:4
2013-05-29 09:04:20 --- DEBUG: #0 C:\xampp\htdocs\isay\application\views\v_worldnews.php(4): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\xampp\htdocs...', 4, Array)
#1 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\isay\application\views\v_base.php(36): Kohana_View->__toString()
#5 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\isay\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\isay\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#11 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\isay\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\isay\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\isay\application\views\v_worldnews.php:4
2013-05-29 09:07:07 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$name ~ APPPATH\views\v_worldnews.php [ 4 ] in C:\xampp\htdocs\isay\application\views\v_worldnews.php:4
2013-05-29 09:07:07 --- DEBUG: #0 C:\xampp\htdocs\isay\application\views\v_worldnews.php(4): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\xampp\htdocs...', 4, Array)
#1 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\isay\application\views\v_base.php(36): Kohana_View->__toString()
#5 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\isay\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\isay\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#11 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\isay\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\isay\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\isay\application\views\v_worldnews.php:4
2013-05-29 09:07:47 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$name ~ APPPATH\views\v_worldnews.php [ 4 ] in C:\xampp\htdocs\isay\application\views\v_worldnews.php:4
2013-05-29 09:07:47 --- DEBUG: #0 C:\xampp\htdocs\isay\application\views\v_worldnews.php(4): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\xampp\htdocs...', 4, Array)
#1 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\isay\application\views\v_base.php(36): Kohana_View->__toString()
#5 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\isay\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\isay\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#11 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\isay\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\isay\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\isay\application\views\v_worldnews.php:4
2013-05-29 09:08:46 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$name ~ APPPATH\views\v_worldnews.php [ 4 ] in C:\xampp\htdocs\isay\application\views\v_worldnews.php:4
2013-05-29 09:08:46 --- DEBUG: #0 C:\xampp\htdocs\isay\application\views\v_worldnews.php(4): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\xampp\htdocs...', 4, Array)
#1 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\isay\application\views\v_base.php(36): Kohana_View->__toString()
#5 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\isay\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\isay\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#11 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\isay\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\isay\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\isay\application\views\v_worldnews.php:4
2013-05-29 09:13:56 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$name ~ APPPATH\views\v_worldnews.php [ 4 ] in C:\xampp\htdocs\isay\application\views\v_worldnews.php:4
2013-05-29 09:13:56 --- DEBUG: #0 C:\xampp\htdocs\isay\application\views\v_worldnews.php(4): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\xampp\htdocs...', 4, Array)
#1 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\isay\application\views\v_base.php(36): Kohana_View->__toString()
#5 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\isay\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\isay\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#11 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\isay\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\isay\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\isay\application\views\v_worldnews.php:4
2013-05-29 09:53:57 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH\classes\Controller\index.php [ 35 ] in :
2013-05-29 09:53:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-29 09:54:42 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$name ~ APPPATH\views\v_worldnews.php [ 4 ] in C:\xampp\htdocs\isay\application\views\v_worldnews.php:4
2013-05-29 09:54:42 --- DEBUG: #0 C:\xampp\htdocs\isay\application\views\v_worldnews.php(4): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\xampp\htdocs...', 4, Array)
#1 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\isay\application\views\v_base.php(36): Kohana_View->__toString()
#5 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\isay\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\isay\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#11 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\isay\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\isay\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\isay\application\views\v_worldnews.php:4
2013-05-29 09:58:25 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$name ~ APPPATH\views\v_worldnews.php [ 4 ] in C:\xampp\htdocs\isay\application\views\v_worldnews.php:4
2013-05-29 09:58:25 --- DEBUG: #0 C:\xampp\htdocs\isay\application\views\v_worldnews.php(4): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\xampp\htdocs...', 4, Array)
#1 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\isay\application\views\v_base.php(36): Kohana_View->__toString()
#5 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\isay\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\isay\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#11 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\isay\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\isay\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\isay\application\views\v_worldnews.php:4
2013-05-29 09:59:06 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$name ~ APPPATH\views\v_worldnews.php [ 4 ] in C:\xampp\htdocs\isay\application\views\v_worldnews.php:4
2013-05-29 09:59:06 --- DEBUG: #0 C:\xampp\htdocs\isay\application\views\v_worldnews.php(4): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\xampp\htdocs...', 4, Array)
#1 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\isay\application\views\v_base.php(36): Kohana_View->__toString()
#5 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\isay\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\isay\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#11 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\isay\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\isay\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\isay\application\views\v_worldnews.php:4
2013-05-29 10:02:42 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$name ~ APPPATH\views\v_worldnews.php [ 4 ] in C:\xampp\htdocs\isay\application\views\v_worldnews.php:4
2013-05-29 10:02:42 --- DEBUG: #0 C:\xampp\htdocs\isay\application\views\v_worldnews.php(4): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\xampp\htdocs...', 4, Array)
#1 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\isay\application\views\v_base.php(36): Kohana_View->__toString()
#5 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\isay\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\isay\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#11 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\isay\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\isay\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\isay\application\views\v_worldnews.php:4
2013-05-29 10:03:08 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$name ~ APPPATH\views\v_worldnews.php [ 4 ] in C:\xampp\htdocs\isay\application\views\v_worldnews.php:4
2013-05-29 10:03:08 --- DEBUG: #0 C:\xampp\htdocs\isay\application\views\v_worldnews.php(4): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\xampp\htdocs...', 4, Array)
#1 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\isay\application\views\v_base.php(36): Kohana_View->__toString()
#5 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\isay\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\isay\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#11 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\isay\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\isay\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\isay\application\views\v_worldnews.php:4
2013-05-29 10:03:33 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$name ~ APPPATH\views\v_worldnews.php [ 4 ] in C:\xampp\htdocs\isay\application\views\v_worldnews.php:4
2013-05-29 10:03:33 --- DEBUG: #0 C:\xampp\htdocs\isay\application\views\v_worldnews.php(4): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\xampp\htdocs...', 4, Array)
#1 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\isay\application\views\v_base.php(36): Kohana_View->__toString()
#5 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\isay\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\isay\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#11 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\isay\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\isay\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\isay\application\views\v_worldnews.php:4
2013-05-29 10:04:16 --- CRITICAL: Kohana_Exception [ 0 ]: The find property does not exist in the Model_Worldnew class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in C:\xampp\htdocs\isay\modules\orm\classes\Kohana\ORM.php:600
2013-05-29 10:04:16 --- DEBUG: #0 C:\xampp\htdocs\isay\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('find')
#1 C:\xampp\htdocs\isay\application\classes\Controller\index.php(30): Kohana_ORM->__get('find')
#2 C:\xampp\htdocs\isay\system\classes\Kohana\Controller.php(84): Controller_Index->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#5 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\isay\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\isay\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\isay\modules\orm\classes\Kohana\ORM.php:600
2013-05-29 10:04:49 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$name ~ APPPATH\views\v_worldnews.php [ 4 ] in C:\xampp\htdocs\isay\application\views\v_worldnews.php:4
2013-05-29 10:04:49 --- DEBUG: #0 C:\xampp\htdocs\isay\application\views\v_worldnews.php(4): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\xampp\htdocs...', 4, Array)
#1 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\isay\application\views\v_base.php(36): Kohana_View->__toString()
#5 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\isay\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\isay\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#11 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\isay\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\isay\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\isay\application\views\v_worldnews.php:4
2013-05-29 10:19:46 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$name ~ APPPATH\views\v_worldnews.php [ 4 ] in C:\xampp\htdocs\isay\application\views\v_worldnews.php:4
2013-05-29 10:19:46 --- DEBUG: #0 C:\xampp\htdocs\isay\application\views\v_worldnews.php(4): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\xampp\htdocs...', 4, Array)
#1 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\isay\application\views\v_base.php(36): Kohana_View->__toString()
#5 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\isay\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\isay\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#11 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\isay\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\isay\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\isay\application\views\v_worldnews.php:4
2013-05-29 10:21:24 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '$worldnews' (T_VARIABLE) ~ APPPATH\classes\Controller\index.php [ 30 ] in :
2013-05-29 10:21:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-29 10:22:14 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$name ~ APPPATH\views\v_worldnews.php [ 4 ] in C:\xampp\htdocs\isay\application\views\v_worldnews.php:4
2013-05-29 10:22:14 --- DEBUG: #0 C:\xampp\htdocs\isay\application\views\v_worldnews.php(4): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\xampp\htdocs...', 4, Array)
#1 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\isay\application\views\v_base.php(36): Kohana_View->__toString()
#5 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\isay\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\isay\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#11 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\isay\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\isay\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\isay\application\views\v_worldnews.php:4
2013-05-29 10:24:12 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH\classes\Controller\index.php [ 31 ] in :
2013-05-29 10:24:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-29 10:24:23 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$name ~ APPPATH\views\v_worldnews.php [ 4 ] in C:\xampp\htdocs\isay\application\views\v_worldnews.php:4
2013-05-29 10:24:23 --- DEBUG: #0 C:\xampp\htdocs\isay\application\views\v_worldnews.php(4): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\xampp\htdocs...', 4, Array)
#1 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\isay\application\views\v_base.php(36): Kohana_View->__toString()
#5 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\isay\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\isay\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#11 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\isay\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\isay\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\isay\application\views\v_worldnews.php:4
2013-05-29 10:35:52 --- CRITICAL: Kohana_Exception [ 0 ]: The body property does not exist in the Model_Ad class ~ MODPATH\orm\classes\Kohana\ORM.php [ 757 ] in C:\xampp\htdocs\isay\modules\orm\classes\Kohana\ORM.php:699
2013-05-29 10:35:52 --- DEBUG: #0 C:\xampp\htdocs\isay\modules\orm\classes\Kohana\ORM.php(699): Kohana_ORM->set('body', 'link for ad')
#1 C:\xampp\htdocs\isay\application\classes\Controller\index.php(23): Kohana_ORM->__set('body', 'link for ad')
#2 C:\xampp\htdocs\isay\system\classes\Kohana\Controller.php(84): Controller_Index->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#5 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\isay\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\isay\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\isay\modules\orm\classes\Kohana\ORM.php:699
2013-05-29 10:36:21 --- CRITICAL: View_Exception [ 0 ]: The requested view v_worldads could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\xampp\htdocs\isay\system\classes\Kohana\View.php:137
2013-05-29 10:36:21 --- DEBUG: #0 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(137): Kohana_View->set_filename('v_worldads')
#1 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(30): Kohana_View->__construct('v_worldads', Array)
#2 C:\xampp\htdocs\isay\application\classes\Controller\index.php(28): Kohana_View::factory('v_worldads', Array)
#3 C:\xampp\htdocs\isay\system\classes\Kohana\Controller.php(84): Controller_Index->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#6 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\isay\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\isay\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\isay\system\classes\Kohana\View.php:137
2013-05-29 10:40:16 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: worldnews ~ APPPATH\views\v_worldads.php [ 1 ] in C:\xampp\htdocs\isay\application\views\v_worldads.php:1
2013-05-29 10:40:16 --- DEBUG: #0 C:\xampp\htdocs\isay\application\views\v_worldads.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 1, Array)
#1 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\isay\application\views\v_base.php(393): Kohana_View->__toString()
#5 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\isay\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\isay\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#11 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\isay\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\isay\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\isay\application\views\v_worldads.php:1
2013-05-29 10:42:03 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH\classes\Controller\index.php [ 23 ] in :
2013-05-29 10:42:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-05-29 10:42:26 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH\classes\Controller\index.php [ 23 ] in :
2013-05-29 10:42:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :