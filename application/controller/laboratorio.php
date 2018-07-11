<?php

class laboratorio extends Controller
{

	private $mdlmodel = null;

  function __construct(){
    $this->mdlmodel = $this->loadModel("mdllaboratorio");
    $this->mdlgestor = $this->loadModel("mdlgestor");

  }

############################## Inicio método index ##############################

/*--------------- Muestra los Laboratorios que tiene cada nodo (lo ve el dinamizador) -----------------*/
	public function index($idnodo)
	{

		$this->mdlgestor->__SET("idnodo", $idnodo);
    $linea = $this->mdlgestor->lineasnodo();
		$this->mdlmodel->__SET("idnodo", $idnodo);
		$consultar = $this->mdlmodel->consultar();
		require APP . 'view/_templates/headeradmin.php';
  	require APP . 'view/laboratorio/index.php';
		require APP . 'view/_footer/footerdinamizador.php';

	}
############################## Fin método index ##############################


############################## Inicio método edit ##############################

	/*--------------- Muestra el formulario para Editar un laboratorio (lo hace el dinamizador) -----------------*/
 public function edit($idlaboratorio,$idnodo)
    {
     $this->mdlmodel->__SET("idlaboratorio", $idlaboratorio);
      $datos = $this->mdlmodel->uno();
			$this->mdlgestor->__SET("idnodo", $idnodo);
      $linea = $this->mdlgestor->lineasnodo();
     require APP . 'view/_templates/headeradmin.php';
     require APP . 'view/laboratorio/modificar.php';
		 require APP . 'view/_footer/footerdinamizador.php';

    }
############################## Fin método edit ##############################



	############################## Inicio método modificar ##############################

	/*--------------- Guarda los cambios hechos al laboratorio -----------------*/
	     public function modificar()
	   {

	    $this->mdlmodel->__SET("idlaboratorio", $_POST["txtid"]);
	    $this->mdlmodel->__SET("nombre", $_POST["txtnombre"]);
	    $this->mdlmodel->__SET("linea", $_POST["txtlinea"]);
	    $this->mdlmodel->__SET("participacioncostos", $_POST["txtparticipacion"]);
	    $very= $this->mdlmodel->modificar();
	    header('location: ' . URL . 'laboratorio/index/'. $_POST["txtidnodo"] .'/#menu2');
		}
	############################## Fin método modificar ##############################


		############################## Inicio método inhabilitarlab ##############################

			/*---------------Inhabilitado el laboratorio -----------------*/
			   public function inhabilitarlab(){

					 $this->mdlmodel->__SET("idlaboratorio", $_POST["id"]);
	         $this->mdlmodel->__SET("estado", $_POST["estado"]);
	         $very= $this->mdlmodel->inhabilitarlab();
	         if ($very) {
	             echo json_encode(["v"=>1]);
	         }else{
	             echo json_encode(["v"=>0]);
	         }
				 }
	 ############################## Fin método inhabilitarlab ##############################

	 ############################## Inicio método registrar ##############################

	 /*--------------- Registro de Laboratorio por nodo (lo hace el dinamizador) -----------------*/
    public function registrar()
   {

    $this->mdlmodel->__SET("linea", $_POST["txtlinea"]);
    $this->mdlmodel->__SET("idnodo", $_POST["txtidnodo"]);
    $this->mdlmodel->__SET("nombre", ucwords ($_POST["txtnombre"]));
    $this->mdlmodel->__SET("participacioncostos", $_POST["txtparticipacioncostos"]);
    $very= $this->mdlmodel->registrar();
    header('location: ' . URL . 'laboratorio/index/'.$_POST["txtidnodo"]);

   }
	 ############################## Fin método registrar ##############################
}
