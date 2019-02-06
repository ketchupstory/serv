<?php

use serv\controllers\baseController;


class DoctorController extends baseController
{

  public function __construct(){
     parent::__construct();
  }
  public function actionList(){

    $template = $this->twig->load('index.html');
    echo $template->render(['the' => 'doctorList']);


    return true;

  }
  public function actionIndex(){

     $template = $this->twig->load('index.html');
     echo $template->render(['the' => 'doctors page']);
  }
}
