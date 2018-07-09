<?php

class gestor extends Controller
{

	private $mdlmodel = null;
	private $mdlcuentas = null;
	private $objeto = null;
  function __construct(){
    	$this->mdlmodel = $this->loadModel("mdlgestor");
     	$this->mdlcuentas = $this->loadModel("mdlcuentas");
  }

	public function index($idnodo){
				$this->mdlmodel->__SET("idnodo", $idnodo);
				$linea = $this->mdlmodel->lineasnodo();
				$consultargestor = $this->mdlmodel->consultargestor();
				require APP . 'view/_templates/headeradmin.php';
				require APP . 'view/gestor/index.php';
	}

	public function registrar(){

    $this->mdlcuentas->__SET("documento", $_POST["txtdocumento"]);
    $this->mdlcuentas->__SET("nombres", ucwords ($_POST["txtnombres"]));
    $this->mdlcuentas->__SET("apellidos", ucwords ($_POST["txtapellidos"]));
    $this->mdlcuentas->__SET("correo", $_POST["txtcorreo"]);
    $this->mdlcuentas->__SET("idnodo", $_POST["txtidnodo"]);
		$this->mdlcuentas->__SET("rol",'Gestor');
		$this->mdlcuentas->__SET("correo", $_POST["txtcorreo"]);
		$this->mdlcuentas->__SET("estado",1);
		$this->mdlcuentas->__SET("tipodoc",1);
		$this->mdlcuentas->__SET("contacto", $_POST["txtcontacto"]);
		$this->mdlcuentas->__SET("password", MD5($_POST["txtdocumento"]));

		$veryy= $this->mdlcuentas->registrarusuario();

		$this->mdlmodel->__SET("documento", $_POST["txtdocumento"]);
		$this->mdlmodel->__SET("linea", $_POST["txtlinea"]);
		$this->mdlmodel->__SET("salario", $_POST["txtsalario"]);
		$very= $this->mdlmodel->registrar();
  	header('location: ' . URL . 'gestor/index/'.$_POST["txtidnodo"]);

   }

 public function edit($idpersona,$idnodo){

      $this->mdlmodel->__SET("idpersona", $idpersona);
      $this->mdlmodel->__SET("idnodo", $idnodo);
      $linea = $this->mdlmodel->lineasnodo();
      $datos = $this->mdlmodel->verg();
      $consultargestor = $this->mdlmodel->consultargestor();
     require APP . 'view/_templates/headeradmin.php';
     require APP . 'view/gestor/modificar.php';

    }

     public function modificar(){

			 //
			 // var_dump($_POST["txtdocumentomod"]);
			 // exit;
	    $this->mdlcuentas->__SET("documento", $_POST["txtdocumentomod"]);
	    $this->mdlcuentas->__SET("idpersona", $_POST["txtidpersona"]);
	    $this->mdlcuentas->__SET("nombres", ucwords ($_POST["txtnombres"]));
	    $this->mdlcuentas->__SET("apellidos", ucwords ($_POST["txtapellidos"]));
	    $this->mdlcuentas->__SET("correo", $_POST["txtcorreo"]);
	    $this->mdlcuentas->__SET("contacto", $_POST["txtcontacto"]);
	    $very = $this->mdlcuentas->modificarcuenta();

			$this->mdlmodel->__SET("idpersona", $_POST["txtidpersona"]);
			$this->mdlmodel->__SET("linea", $_POST["txtlinea"]);
			$this->mdlmodel->__SET("salario", $_POST["txtsalario"]);
			$very2 = $this->mdlmodel->modificargestor();


	   header('location: ' . URL . 'gestor/index/'.$_POST["txtidnodo"].'/#menu2');

   }

    public function cambiarestadog(){

        $this->mdlmodel->__SET("idpersona", $_POST["id"]);
        $this->mdlmodel->__SET("estado", $_POST["estado"]);
        $very= $this->mdlmodel->modificarestadog();
        if ($very) {
            echo json_encode(["v"=>1]);
        }else{
            echo json_encode(["v"=>0]);
        }

    }

		public function ver($documento){

      	$this->mdlmodel->__SET("documento", $documento);
       	$datos = $this->mdlmodel->verg();
         echo json_encode($datos);

    }

		public function vergc($correo){

				$this->mdlmodel->__SET("correo", $correo);
    		$datos = $this->mdlmodel->vergc();
         echo json_encode($datos);

    }

	 	public function consultauso($proyecto){

        $this->mdlmodel->__SET("proyecto", $proyecto);
        $datos = $this->mdlmodel->consultauso();
        echo json_encode($datos);

    }

		public function consultalinea($idgestor){

        $this->mdlmodel->__SET("idgestor", $idgestor);
        $datos = $this->mdlmodel->consultalinea();
        echo json_encode($datos);

    }

		public function consultagp($gestor){

        $this->mdlmodel->__SET("gestor", $gestor);
        $datos = $this->mdlmodel->consultagp();
        echo json_encode($datos);

    }


}
