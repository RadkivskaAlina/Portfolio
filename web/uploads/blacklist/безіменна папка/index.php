<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
define('ROOT', __DIR__);

session_start();

require ROOT.'/components/Autoload.php';
$autoload = new Autoload();
$autoload->init();

$router = new Router();
$router->init();

?>