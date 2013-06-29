<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-06-26 12:59:06 --- CRITICAL: Database_Exception [ 2 ]: mysql_connect():  ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in C:\xampp\htdocs\isay\modules\database\classes\Kohana\Database\MySQL.php:171
2013-06-26 12:59:06 --- DEBUG: #0 C:\xampp\htdocs\isay\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 C:\xampp\htdocs\isay\modules\database\classes\Kohana\Database\MySQL.php(358): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 C:\xampp\htdocs\isay\modules\orm\classes\Kohana\ORM.php(1665): Kohana_Database_MySQL->list_columns('countries')
#3 C:\xampp\htdocs\isay\modules\orm\classes\Kohana\ORM.php(441): Kohana_ORM->list_columns()
#4 C:\xampp\htdocs\isay\modules\orm\classes\Kohana\ORM.php(386): Kohana_ORM->reload_columns()
#5 C:\xampp\htdocs\isay\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#6 C:\xampp\htdocs\isay\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#7 C:\xampp\htdocs\isay\application\classes\Controller\index.php(58): Kohana_ORM::factory('countrie')
#8 C:\xampp\htdocs\isay\system\classes\Kohana\Controller.php(84): Controller_Index->action_index()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#11 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\isay\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\isay\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\isay\modules\database\classes\Kohana\Database\MySQL.php:171
2013-06-26 12:59:24 --- CRITICAL: Database_Exception [ 2 ]: mysql_connect():  ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in C:\xampp\htdocs\isay\modules\database\classes\Kohana\Database\MySQL.php:171
2013-06-26 12:59:24 --- DEBUG: #0 C:\xampp\htdocs\isay\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 C:\xampp\htdocs\isay\modules\database\classes\Kohana\Database\MySQL.php(358): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 C:\xampp\htdocs\isay\modules\orm\classes\Kohana\ORM.php(1665): Kohana_Database_MySQL->list_columns('countries')
#3 C:\xampp\htdocs\isay\modules\orm\classes\Kohana\ORM.php(441): Kohana_ORM->list_columns()
#4 C:\xampp\htdocs\isay\modules\orm\classes\Kohana\ORM.php(386): Kohana_ORM->reload_columns()
#5 C:\xampp\htdocs\isay\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#6 C:\xampp\htdocs\isay\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#7 C:\xampp\htdocs\isay\application\classes\Controller\index.php(58): Kohana_ORM::factory('countrie')
#8 C:\xampp\htdocs\isay\system\classes\Kohana\Controller.php(84): Controller_Index->action_index()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#11 C:\xampp\htdocs\isay\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\isay\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\isay\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\isay\modules\database\classes\Kohana\Database\MySQL.php:171