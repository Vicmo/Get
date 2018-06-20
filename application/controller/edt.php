<?php

class edt extends Controller
{
	
	private $mdlmodel = null;

 function __construct(){
    $this->mdlmodel = $this->loadModel("mdledt");

  }

	public function index($gestor)
	{

  $this->mdlmodel->__SET("gestor", $gestor);
  $consulta = $this->mdlmodel->consulta();
	require APP . 'view/_templates/headergestor.php';
  require APP . 'view/edt/index.php';
		
	}

     public function registrar()
   {
    $documento= $_POST["txtgestor"];
    $this->mdlmodel->__SET("fecha", $_POST["txtfecha"]);
    $this->mdlmodel->__SET("nombre", $_POST["txtnombre"]);
    $this->mdlmodel->__SET("empresa", $_POST["txtempresa"]);
    $this->mdlmodel->__SET("contacto", $_POST["txtcontacto"]);
    $this->mdlmodel->__SET("correo", $_POST["txtcorreo"]);
    $this->mdlmodel->__SET("telefono", $_POST["txttelefono"]);
    $this->mdlmodel->__SET("gestor", $_POST["txtgestor"]);
    $this->mdlmodel->__SET("observaciones", $_POST["txtobservaciones"]);
    $this->mdlmodel->__SET("empleados", $_POST["txtempleados"]);
    $this->mdlmodel->__SET("instructores", $_POST["txtinstructores"]);
    $this->mdlmodel->__SET("aprendices", $_POST["txtaprendices"]);
    $this->mdlmodel->__SET("publico", $_POST["txtpublico"]);
    $very= $this->mdlmodel->registrar(); 
   header('location: ' . URL . 'edt/index/'. $documento);

   }

           public function ver($id)
    {
        $this->mdlmodel->__SET("id", $id);
        $datos = $this->mdlmodel->veredt();
        echo json_encode($datos);
    }

    public function edit($idedt)
    {
      $this->mdlmodel->__SET("idedt", $idedt);
      $datos = $this->mdlmodel->uno();
     require APP . 'view/_templates/headergestor.php';
     require APP . 'view/edt/modificar.php';
     
    }

 public function modificar()
   {
     $documento= $_POST["txtgestor"];
    
    $this->mdlmodel->__SET("fecha", $_POST["txtfecha"]);
    $this->mdlmodel->__SET("nombre", $_POST["txtnombre"]);
    $this->mdlmodel->__SET("empresa", $_POST["txtempresa"]);
    $this->mdlmodel->__SET("contacto", $_POST["txtcontacto"]);
    $this->mdlmodel->__SET("correo", $_POST["txtcorreo"]);
    $this->mdlmodel->__SET("telefono", $_POST["txttelefono"]);
    $this->mdlmodel->__SET("gestor", $documento);
    $this->mdlmodel->__SET("observaciones", $_POST["txtobservaciones"]);
    $this->mdlmodel->__SET("empleados", $_POST["txtempleados"]);
    $this->mdlmodel->__SET("instructores", $_POST["txtinstructores"]);
    $this->mdlmodel->__SET("aprendices", $_POST["txtaprendices"]);
    $this->mdlmodel->__SET("publico", $_POST["txtpublico"]);
    $this->mdlmodel->__SET("idedt", $_POST["txtid"]);
  
    $very= $this->mdlmodel->modificar(); 
    header('location: ' . URL . 'edt/index/'. $documento.'#menu2');

   }


}