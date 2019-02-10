<?php
namespace serv\controllers;
use serv\controllers\baseController;


class SettingController extends baseController
{

  public function __construct(){
     parent::__construct();
  }
  public function actionDoctor(){

    $template = $this->twig->load('settingDoctor.html');
    echo $template->render(['the' => 'doctorList']);


    return true;

  }
  public function actionIndex(){

     $template = $this->twig->load('setting.html');
     echo $template->render(['the' => 'doctors page']);
  }
}
