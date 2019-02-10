<?php
namespace serv\controllers;
use serv\controllers\baseController;
use serv\core\Weather;
class IndexController extends baseController
{
  public function __construct(){
     parent::__construct();
  }
  public function actionIndex() {


    $weather = new Weather();
    $weather->getCurrentWeather();
  $template = $this->twig->load('index.html');

$weatherString= $weather->prettyString();
    echo $template->render(['weather'=>$weatherString]);
  }
}
