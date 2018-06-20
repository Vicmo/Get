<?php

class laboratorio extends Controller
{
	
	private $mdlmodel = null;

  function __construct(){
    $this->mdlmodel = $this->loadModel("mdllaboratorio");
    $this->mdlgestor = $this->loadModel("mdlgestor");

  }

	public function index()
	{
    $linea = $this->mdlgestor->consultalineaa();
	$consultar = $this->mdlmodel->consultar();
	require APP . 'view/_templates/headeradmin.php';
  require APP . 'view/laboratorio/index.php';
		
	}


 public function edit($idlaboratorio)
    {
     $this->mdlmodel->__SET("idlaboratorio", $idlaboratorio);
      $datos = $this->mdlmodel->uno();
      $linea = $this->mdlgestor->consultalineaa(); 
     require APP . 'view/_templates/headeradmin.php';
     require APP . 'view/laboratorio/modificar.php';
     
    }

     public function modificar()
   {
    
    $this->mdlmodel->__SET("idlaboratorio", $_POST["txtid"]);
    $this->mdlmodel->__SET("nombre", $_POST["txtnombre"]);
    $this->mdlmodel->__SET("linea", $_POST["txtlinea"]);
    $this->mdlmodel->__SET("participacioncostos", $_POST["txtparticipacion"]);
    $very= $this->mdlmodel->modificar();
    header('location: ' . URL . 'laboratorio/index/#menu2');

   }

    public function registrar()
   {
    
    
    $this->mdlmodel->__SET("linea", $_POST["txtlinea"]);
    $this->mdlmodel->__SET("nombre", ucwords ($_POST["txtnombre"]));
    $this->mdlmodel->__SET("participacioncostos", $_POST["txtparticipacioncostos"]);
    $very= $this->mdlmodel->registrar(); 
    header('location: ' . URL . 'laboratorio');

   } 
}
