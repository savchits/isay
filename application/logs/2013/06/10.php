<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-06-10 03:06:36 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '$users' (T_VARIABLE), expecting identifier (T_STRING) ~ APPPATH\classes\Controller\auth.php [ 92 ] in :
2013-06-10 03:06:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-06-10 03:48:08 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_statia' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in :
2013-06-10 03:48:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-06-10 03:50:26 --- CRITICAL: Database_Exception [ 1062 ]: Duplicate entry 'adminanastasia' for key 'uniq_username' [ INSERT INTO `users` (`email`, `username`, `first_name`, `password`) VALUES ('savchits@gmail.com', 'adminanastasia', 'savchits', 'f917ac0dd152f833fba11c05f811a5e7ee015d63178edd9e7b8f61666d048cd7') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp\htdocs\isay\modules\database\classes\Kohana\Database\Query.php:251
2013-06-10 03:50:26 --- DEBUG: #0 C:\xampp\htdocs\isay\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 C:\xampp\htdocs\isay\modules\orm\classes\Kohana\ORM.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\xampp\htdocs\isay\modules\orm\classes\Kohana\ORM.php(1418): Kohana_ORM->create(NULL)
#3 C:\xampp\htdocs\isay\application\classes\Controller\auth.php(88): Kohana_ORM->save()
#4 C:\xampp\htdocs\isay\system\classes\Kohana\Controller.php(84): Controller_Auth->action_register()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#7 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\isay\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\isay\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\isay\modules\database\classes\Kohana\Database\Query.php:251
2013-06-10 04:09:30 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: styles ~ APPPATH\views\v_base.php [ 3 ] in C:\xampp\htdocs\isay\application\views\v_base.php:3
2013-06-10 04:09:30 --- DEBUG: #0 C:\xampp\htdocs\isay\application\views\v_base.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 3, Array)
#1 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\isay\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\xampp\htdocs\isay\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Indexadmin))
#7 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\isay\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\isay\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\isay\application\views\v_base.php:3
2013-06-10 04:14:12 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: news ~ APPPATH\views\v_adminworldads.php [ 24 ] in C:\xampp\htdocs\isay\application\views\v_adminworldads.php:24
2013-06-10 04:14:12 --- DEBUG: #0 C:\xampp\htdocs\isay\application\views\v_adminworldads.php(24): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 24, Array)
#1 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\isay\application\views\v_base.php(175): Kohana_View->__toString()
#5 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\isay\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\isay\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\isay\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Indexadmin))
#11 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\isay\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\isay\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\isay\application\views\v_adminworldads.php:24
2013-06-10 04:18:13 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_statia' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in :
2013-06-10 04:18:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-06-10 04:20:28 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_ads' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in :
2013-06-10 04:20:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-06-10 04:20:50 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH\classes\Controller\indexadmin.php [ 133 ] in C:\xampp\htdocs\isay\application\classes\Controller\indexadmin.php:133
2013-06-10 04:20:50 --- DEBUG: #0 C:\xampp\htdocs\isay\application\classes\Controller\indexadmin.php(133): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 133, Array)
#1 C:\xampp\htdocs\isay\system\classes\Kohana\Controller.php(84): Controller_Indexadmin->action_delete()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Indexadmin))
#4 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\isay\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\isay\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\isay\application\classes\Controller\indexadmin.php:133
2013-06-10 04:34:05 --- CRITICAL: ErrorException [ 1 ]: Class 'Controller_Baseadmin' not found ~ APPPATH\classes\Controller\indexadmin.php [ 5 ] in :
2013-06-10 04:34:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-06-10 04:35:12 --- CRITICAL: ErrorException [ 1 ]: Class 'Controller_Baseadmin' not found ~ APPPATH\classes\Controller\indexadmin.php [ 5 ] in :
2013-06-10 04:35:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-06-10 04:35:15 --- CRITICAL: ErrorException [ 1 ]: Class 'Controller_Baseadmin' not found ~ APPPATH\classes\Controller\indexadmin.php [ 5 ] in :
2013-06-10 04:35:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-06-10 04:36:50 --- CRITICAL: ErrorException [ 1 ]: Class 'Controller_Baseforadmin' not found ~ APPPATH\classes\Controller\indexadmin.php [ 5 ] in :
2013-06-10 04:36:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-06-10 05:06:10 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_ads' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in :
2013-06-10 05:06:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-06-10 05:15:18 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_new' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in :
2013-06-10 05:15:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :