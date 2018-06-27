<?php

class nodo extends Controller
{

  private $mdlmodel = null;
  private $mdlciudad = null;

  function __construct(){
    $this->mdlmodel = $this->loadModel("mdlnodo");
    $this->mdlciudad = $this->loadModel("mdlciudad");
  }

  public function index (){
    $consultarnodos = $this->mdlmodel->consultarnodos();
    $consultardept = $this->mdlciudad->consultardepto();
    require APP . 'view/_templates/headeradminodos.php';
    require APP . 'view/nodo/index.php';

  }

  public function getciudad($id){
    $this->mdlciudad->__SET("iddepartamento", $id);
    $datos = $this->mdlciudad->consultarciudad();
    echo json_encode($datos);
  }


  public function registrar(){
    $this->mdlmodel->__SET("nombre", ucwords($_POST["txtnombre"]));
    $this->mdlmodel->__SET("direccion",  $_POST["txtdireccion"]);
    $this->mdlmodel->__SET("ciudad", $_POST["txtciudad"]);
    $very= $this->mdlmodel->registrar();
    header('location: ' . URL . 'nodo');
  }

  public function edit($idnodo, $iddepartamento){
    $this->mdlmodel->__SET("idnodo", $idnodo);
    $this->mdlciudad->__SET("iddepartamento", $iddepartamento);
    $depto = $this->mdlmodel->consultadepto();
    $ciudad = $this->mdlciudad->consultarciudad();
    $datos = $this->mdlmodel->vernodo();
    // var_dump($ciudad);
    // exit;
    require APP . 'view/_templates/headeradminodos.php';
    require APP . 'view/nodo/modificar.php';
    // $consultargestor = $this->mdlmodel->consultargestor();
  }

}
