<?php

class gestor extends Controller
{
	
	private $mdlmodel = null;

  function __construct(){
    $this->mdlmodel = $this->loadModel("mdlgestor");
     $this->mdlcuentas = $this->loadModel("mdlcuentas");
   
  }

	public function index()
	{
	
	    $linea = $this->mdlmodel->consultalineaa();
	  $consultargestor = $this->mdlmodel->consultargestor();
	require APP . 'view/_templates/headeradmin.php';
     require APP . 'view/gestor/index.php';
		
	}

	public function registrar()
   {
    
    $this->mdlmodel->__SET("documento", $_POST["txtdocumento"]);
    $this->mdlmodel->__SET("nombres", ucwords ($_POST["txtnombres"]));
    $this->mdlmodel->__SET("apellidos", ucwords ($_POST["txtapellidos"]));
    $this->mdlmodel->__SET("correo", $_POST["txtcorreo"]);
    $this->mdlmodel->__SET("linea", $_POST["txtlinea"]);
    $this->mdlmodel->__SET("salario", $_POST["txtsalario"]);

       $very= $this->mdlmodel->registrar(); 

    $this->mdlcuentas->__SET("rol",2);
    $this->mdlcuentas->__SET("correo", $_POST["txtcorreo"]);
    $this->mdlcuentas->__SET("clave", MD5($_POST["txtdocumento"]));
    $veryy= $this->mdlcuentas->registrarcuenta();  
       header('location: ' . URL . 'gestor');

   }

 public function edit($documento)
    {
      $this->mdlmodel->__SET("documento", $documento);
      $linea = $this->mdlmodel->consultalineaa();
      $datos = $this->mdlmodel->verg();
      $consultargestor = $this->mdlmodel->consultargestor();
     require APP . 'view/_templates/headeradmin.php';
     require APP . 'view/gestor/modificar.php';
     
    }

     public function modificar()
   {
    
    $this->mdlmodel->__SET("documento", $_POST["docutxt"]);
    $this->mdlmodel->__SET("nombres", ucwords ($_POST["txtnombres"]));
    $this->mdlmodel->__SET("apellidos", ucwords ($_POST["txtapellidos"]));
    $this->mdlmodel->__SET("correo", $_POST["txtcorreo"]);
    $this->mdlmodel->__SET("linea", $_POST["txtlinea"]);
    $this->mdlmodel->__SET("salario", $_POST["txtsalario"]);
    $very= $this->mdlmodel->modificargestor();

    
    $this->mdlcuentas->__SET("id", $_POST["idc"]);
    $this->mdlcuentas->__SET("correo", $_POST["txtcorreo"]);
    $veryy= $this->mdlcuentas->modificarcuenta();
   header('location: ' . URL . 'gestor/index/#menu2');
  
   }

    public function cambiarestadog(){
        $this->mdlmodel->__SET("documento", $_POST["id"]);
        $this->mdlmodel->__SET("estado", $_POST["estado"]);
        $very= $this->mdlmodel->modificarestadog();
        if ($very) {
            echo json_encode(["v"=>1]);
        }else{
            echo json_encode(["v"=>0]);

        }
 
    
    }

public function ver($documento)
    {
         $this->mdlmodel->__SET("documento", $documento);
       $datos = $this->mdlmodel->verg();
         echo json_encode($datos);
    }

public function vergc($correo)
    {
         $this->mdlmodel->__SET("correo", $correo);
       $datos = $this->mdlmodel->vergc();
         echo json_encode($datos);
    }

	 public function consultauso($proyecto)
    {
        $this->mdlmodel->__SET("proyecto", $proyecto);
        $datos = $this->mdlmodel->consultauso();
        echo json_encode($datos);
    }

     public function consultalinea($documento)
    {
        $this->mdlmodel->__SET("documento", $documento);
        $datos = $this->mdlmodel->consultalinea();
        echo json_encode($datos);
    }

     public function consultagp($gestor)
    {
        $this->mdlmodel->__SET("gestor", $gestor);
        $datos = $this->mdlmodel->consultagp();
        echo json_encode($datos);
    }


    
}
