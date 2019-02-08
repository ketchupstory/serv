<?php
namespace serv\controllers;
require __DIR__."/../vendor/autoload.php";

class baseController
{
  private $loaderTwig;
  protected $twig;
  public function __construct(){
     $this->loaderTwig = new \Twig_Loader_Filesystem(__DIR__.'/../templates');
   $this->twig = new \Twig_Environment($this->loaderTwig);
  }
}
