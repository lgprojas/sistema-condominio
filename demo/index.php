<?php
ini_set('display_errors', 0); 
ini_set('session.cookie_httponly', true);
ini_set('session.cookie_secure', true);
ini_set('file_uploads', 1);
ini_set('post_max_size','50M');
ini_set('upload_max_filesize','5M');
ini_set('max_execution_time','1000');
ini_set('max_input_time','1000');
date_default_timezone_set("America/Argentina/Buenos_Aires");

define('DS', DIRECTORY_SEPARATOR);
define('ROOT', realpath(dirname(__FILE__)) . DS);
define('APP_PATH', ROOT . 'application' . DS);

try {
require_once APP_PATH . 'Config.php';
require_once APP_PATH . 'Acl.php';
require_once APP_PATH . 'Request.php';
require_once APP_PATH . 'Menu.php';
require_once APP_PATH . 'Bootstrap.php';
require_once APP_PATH . 'Controller.php';
require_once APP_PATH . 'Model.php';
require_once APP_PATH . 'View.php';
require_once APP_PATH . 'Registro.php';
require_once APP_PATH . 'Database.php';
require_once APP_PATH . 'Session.php';
require_once APP_PATH . 'Hash.php';

Session::init();

    Bootstrap::run(new Request);

} catch (Exception $e) {
   echo $e->getMessage();
}

?>
