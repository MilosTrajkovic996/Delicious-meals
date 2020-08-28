<?php
@session_start();

date_default_timezone_set("Europe/Belgrade");
define("SESSION_NAMESPACE",session_id());

define('URL', 'http://18.219.92.156/');
//**Abs paths to important directories
define('APS_PATH', explode("/includes",str_replace("\\","/",__FILE__))[0] . "/");
define('APS_PATH_FILES', APS_PATH . "files/");
define('APS_PATH_HOME_IMAGES', APS_PATH . "Slike_za_pocetnu_stranu/");
define('APS_PATH_IMAGES', APS_PATH. 'images/');
define('APS_PATH_TEMPLATES', APS_PATH. 'templates/');   


define('URL_FILES', URL . "files/");
define('URL_HOME_IMAGES', URL . "Slike_za_pocetnu_stranu/");
define('URL_IMAGES', URL. 'images/');
define('AES_KEY', 'elektronika'); 




include_once(__DIR__ . "/class.Parser.inc.php");
include_once(__DIR__ . "/MysqliDb.php");
include_once(__DIR__ . "/dbObject.php");
include_once(APS_PATH . "smarty-3.1.32/libs/Smarty.class.php");
include_once(__DIR__ . "/class.User.Authentication.inc.php"); 

$db = new MysqliDb ('localhost', 'root', 'triglavska92378', 'delicious_meals');





?>