<?php
namespace serv\controllers;
use serv\controllers\baseController;

class IndexController extends baseController
{
  public function __construct(){
     parent::__construct();
  }
  public function actionIndex() {
    $template = $this->twig->load('index.html');
    echo $template->render(['the' => 'Main index page']);
  }
}
