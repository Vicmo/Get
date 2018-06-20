<?php

class vigilancia extends Controller
{

	private $mdlmodel = null;

 function __construct(){
    $this->mdlmodel = $this->loadModel("mdlvigilancia");

  }

	public function index($gestor)
	{

  $this->mdlmodel->__SET("gestor", $gestor);
  $consulta = $this->mdlmodel->consulta();
	require APP . 'view/_templates/headergestor.php';
  require APP . 'view/vigilancia/index.php';

	}

     public function registrar()
   {
    $documento= $_POST["txtgestor"];
     $this->mdlmodel->__SET("gestor", $_POST["txtgestor"]);
    $this->mdlmodel->__SET("fechainicio", $_POST["txtfecha"]);
    $this->mdlmodel->__SET("nombre", $_POST["txtnombre"]);
    $this->mdlmodel->__SET("empresa", $_POST["txtempresa"]);
    $this->mdlmodel->__SET("contacto", $_POST["txtcontacto"]);
    $this->mdlmodel->__SET("correo", $_POST["txtcorreo"]);
    $this->mdlmodel->__SET("telefono", $_POST["txttelefono"]);
    $this->mdlmodel->__SET("observaciones", $_POST["txtobservaciones"]);
    $this->mdlmodel->__SET("fechainicio", $_POST["txtfecha"]);
		// var_dump($this->mdlmodel);
    $very= $this->mdlmodel->registrar();
    header('location: ' . URL . 'vigilancia/index/'. $documento);

   }

    public function edit($idvigilancia)
    {
      $this->mdlmodel->__SET("idvigilancia", $idvigilancia);
      $datos = $this->mdlmodel->uno();
     require APP . 'view/_templates/headergestor.php';
     require APP . 'view/vigilancia/modificar.php';

    }

    public function modificar()
   {
    $documento= $_POST["txtgestor"];
    $this->mdlmodel->__SET("fechainicio", $_POST["txtfecha"]);
    $this->mdlmodel->__SET("nombre", $_POST["txtnombre"]);
    $this->mdlmodel->__SET("empresa", $_POST["txtempresa"]);
    $this->mdlmodel->__SET("contacto", $_POST["txtcontacto"]);
    $this->mdlmodel->__SET("correo", $_POST["txtcorreo"]);
    $this->mdlmodel->__SET("telefono", $_POST["txttelefono"]);
    $this->mdlmodel->__SET("observaciones", $_POST["txtobservaciones"]);
    $this->mdlmodel->__SET("gestor", $documento);
    $this->mdlmodel->__SET("fechafin", $_POST["txtfechafin"]);
    $this->mdlmodel->__SET("horas", $_POST["txthoras"]);
     $this->mdlmodel->__SET("idvigilancia", $_POST["txtid"]);
    $very= $this->mdlmodel->modificar();
  header('location: ' . URL . 'vigilancia/index/'. $documento.'#menu2');

   }

}
