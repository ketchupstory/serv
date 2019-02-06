<?php
namespace serv\components;

class Router
{
  private $routes;

  public function __construct() {
    $routesPath = __DIR__."/../config/routes.php";
    $this->routes = include($routesPath);
    var_dump($this->routes);
  }
  public function run() {

  }
}
 ?>
