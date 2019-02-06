<?php
use serv\app\App;
use serv\core\Router;
require __DIR__."/vendor/autoload.php";
//require __DIR__."/../vendor/twig/autoload.php";
ini_set('display_errors',1);
error_reporting(E_ALL);
//$app = new App();
$loader = new Twig_Loader_Filesystem('templates');
$twig = new Twig_Environment($loader, [
    'cache' => 'cache',]);

$router = new Router();
$router->run();



?>
