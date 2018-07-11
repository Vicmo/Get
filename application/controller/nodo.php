<?php

class nodo extends Controller
{

  private $mdlmodel = null;
  private $mdlciudad = null;

  function __construct(){
    $this->mdlmodel = $this->loadModel("mdlnodo");
    $this->mdlciudad = $this->loadModel("mdlciudad");
    $this->mdlgestor = $this->loadModel("mdlgestor");
  }


  public function indexr (){
    $consultarnodos = $this->mdlmodel->consultarnodost();
    $consultardept = $this->mdlciudad->consultardepto();
    require APP . 'view/_templates/headeradminodos.php';
    require APP . 'view/nodo/indexr.php';
    require APP . 'view/_footer/footeradminnodos.php';

  }

  public function getciudad($id){
    $this->mdlciudad->__SET("iddepartamento", $id);
    $datos = $this->mdlciudad->consultarciudad();
    echo json_encode($datos);
  }

  ################ Inicio método lineasNodo ################

  /*-------------------- Petición Ajax para mostrar las líneas tecnológicas del nodo --------------------*/

  public function lineasNodo($idnodo){
    $this->mdlgestor->__SET("idnodo", $idnodo);
    $datos = $this->mdlgestor->lineasNodo();
    echo json_encode($datos);
  }
  ################ Inicio método lineasNodo ################


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
    require APP . 'view/_templates/headeradminodos.php';
    require APP . 'view/nodo/modificar.php';
    require APP . 'view/_footer/footeradminnodos.php';

  }

  public function modificar(){

          $this->mdlmodel->__SET("nombre", ucwords($_POST["txtnombre"]));
          $this->mdlmodel->__SET("direccion",  $_POST["txtdireccion"]);
          $this->mdlmodel->__SET("ciudad", $_POST["txtciudad"]);
          $this->mdlmodel->__SET("idnodo", $_POST["txtidnodo"]);

         $very= $this->mdlmodel->modificarnodo();

        header('location: ' . URL . 'nodo/indexr');

        }

}
