<?php

class nodo extends Controller
{

  private $mdlmodel = null;
  private $mdlciudad = null;

  function __construct(){
    $this->mdlmodel = $this->loadModel("mdlnodo");
    $this->mdlciudad = $this->loadModel("mdlciudad");
  }

  public function index ($nodo ='1'){
      $this->mdlmodel->__SET("idnodo", $nodo);
      $nodos = $this->mdlmodel->nodos();

     if ($nodo == $nodos["idnodo"]) {
       require APP . 'view/_templates/headeradminodos.php';
       require APP . 'view/nodo/index.php';
     }else{
       header('location: ' . URL . 'problem/index');
     }


   }


  public function indexr (){
    $consultarnodos = $this->mdlmodel->consultarnodost();
    $consultardept = $this->mdlciudad->consultardepto();
    require APP . 'view/_templates/headeradminodos.php';
    require APP . 'view/nodo/indexr.php';

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
    require APP . 'view/_templates/headeradminodos.php';
    require APP . 'view/nodo/modificar.php';
  }

  public function modificar(){

          $this->mdlmodel->__SET("nombre", ucwords($_POST["txtnombre"]));
          $this->mdlmodel->__SET("direccion",  $_POST["txtdireccion"]);
          $this->mdlmodel->__SET("ciudad", $_POST["txtciudad"]);
          $this->mdlmodel->__SET("idnodo", $_POST["txtidnodo"]);

         $very= $this->mdlmodel->modificarnodo();

        header('location: ' . URL . 'nodo/');

        }

  public function selectnodo()
         {
           $this->mdlmodel->__SET("idnodo", $_GET["idnodo"]);
           header('location: ' . URL . 'nodo/index/' . $_GET["idnodo"]);
         }

}
