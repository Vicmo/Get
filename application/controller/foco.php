<?php

class foco extends Controller
{
	
	private $mdlmodel = null;

  function __construct(){
    $this->mdlmodel = $this->loadModel("mdlfoco");
    $this->mdlgestor = $this->loadModel("mdlgestor");

  }

	public function index()
	{
    $linea = $this->mdlgestor->consultalineaa();
	$consultar = $this->mdlmodel->consultar();
	require APP . 'view/_templates/headeradmin.php';
  require APP . 'view/foco/index.php';
		
	}


 public function edit($idfoco)
    {
      $this->mdlmodel->__SET("idfoco", $idfoco);
      $datos = $this->mdlmodel->uno();
      $linea = $this->mdlgestor->consultalineaa();
     require APP . 'view/_templates/headeradmin.php';
     require APP . 'view/foco/modificar.php';
     
    }

     public function modificar()
   {
    
    $this->mdlmodel->__SET("idfoco", $_POST["txtid"]);
    $this->mdlmodel->__SET("nombre", $_POST["txtnombre"]);
    $this->mdlmodel->__SET("linea", $_POST["txtlinea"]);
    $very= $this->mdlmodel->modificar();
    header('location: ' . URL . 'foco/index/#menu2');
   }

    public function registrar()
   {
    
    $this->mdlmodel->__SET("nombre", ucwords ($_POST["txtnombre"]));
    $this->mdlmodel->__SET("linea", $_POST["txtlinea"]);
    $very= $this->mdlmodel->registrar(); 
       header('location: ' . URL . 'foco');

   }


    
}
