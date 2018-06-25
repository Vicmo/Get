<?php

class nodo extends Controller
{

  private $mdlmodel = null;

  function __construct(){
    $this->mdlmodel = $this->loadModel("mdlnodo");
  }

  public function index (){
    $consultarnodos = $this->mdlmodel->consultarnodos();
    require APP . 'view/_templates/headeradminodos.php';
    require APP . 'view/nodo/index.php';

  }

}
