<?php
namespace serv\core;
use serv\controllers\IndexController;
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

  public function run() {
    $uri = $this->getURI();
if($uri=="") {
    $controlerFile = __DIR__."/../controllers/IndexController.php";
    include_once($controlerFile);
    $controlerObject = new IndexController;
    $result = $controlerObject->actionIndex();

}
    foreach($this->routes as $uriPattern => $path) {
      if(preg_match("~$uriPattern~", $uri)) {
      $segments = explode('/', $_SERVER['REQUEST_URI']);

      $controlerName = ucfirst($segments[1])."Controller";

      if(count($segments)>2)
        $actionName="action".ucfirst($segments[2]);
      else
        $actionName="actionIndex";

    $controlerFile = __DIR__."/../controllers/".$controlerName.".php";

   if(file_exists($controlerFile)) {
     include_once($controlerFile);
   }

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
