<?php
namespace serv\controllers;
use serv\controllers\baseController;

class IndexController extends baseController
{
  public function __construct(){
     parent::__construct();
  }
  public function actionIndex() {

    $string = "20-11-2012";
    $pattern = "/([0-9]{2})-([0-9]{2})-([0-9]{4})/";
    $replacement = "Year $3 mounth $2 day $1 ";
    $template = $this->twig->load('index.html');
    $today= preg_replace($pattern,$replacement, $string);
    echo $template->render(['today' =>$today]);
  }
}
