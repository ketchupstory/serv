<?php
namespace serv\core;
use serv\controllers\IndexController;
use serv\controllers\SettingController;

class Router
{
  private $routes;

  public function __construct() {
    $routesPath = __DIR__."/../config/routes.php";
    $this->routes = include($routesPath);

  }
  /*
  Возвращает запрашиваемую сторку
  */
  private function getURI() {
    if(!empty($_SERVER['REQUEST_URI'])) {
      return trim($_SERVER['REQUEST_URI'], '/');
    }
  }
  
 /*
По запрашиваему адресу создает экземпляр контролера и выполнятет метод
 */
  public function run() {
    $uri = $this->getURI();
if($uri=="") {

    $controlerObject = new IndexController;
    $result = $controlerObject->actionIndex();

}

    foreach($this->routes as $uriPattern => $path) {
      if(preg_match("~$uriPattern~", $uri)) {

      $segments = explode('/', $_SERVER['REQUEST_URI']);

      $controlerName = "serv\controllers\\".ucfirst($segments[1])."Controller";

  //Если аргументов url меньше двух вызывается метод индекс контролера
      if(count($segments)>2)
        $actionName="action".ucfirst($segments[2]);
      else
        $actionName="actionIndex";


   $controlerObject = new $controlerName;
   $result = $controlerObject->$actionName();

      if($result !=null) {
        break;
      }
      }
    }
  }

}
 ?>
