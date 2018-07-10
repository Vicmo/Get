<?php

class mantenimiento extends Controller
{

	private $mdlmodel = null;

  function __construct(){
    $this->mdlmodel = $this->loadModel("mdlmantenimiento");
    $this->mdllaboratorio = $this->loadModel("mdllaboratorio");


  }

############################## Inicio método index ##############################

	/*------------- Consulta los laboratorios y mantenimiento por nodo (lo ve el dinamizador) ---------------*/

	public function index($idnodo)
	{

		$this->mdllaboratorio->__SET("idnodo", $idnodo);
		$laboratorio = $this->mdllaboratorio->consultalaboratorioo();
		$this->mdlmodel->__SET("idnodo", $idnodo);
		$consultamantenimiento = $this->mdlmodel->consultamantenimiento();
		require APP . 'view/_templates/headeradmin.php';
		require APP . 'view/mantenimiento/index.php';
		require APP . 'view/_footer/footerdinamizador.php';

	}
############################## Fin método index ##############################


############################## Inicio método registrar ##############################

	/*------------- Envía datos a mdlmantenimiento para registrar un nuevo mantenimiento ---------------*/

	public function registrar()
   {

    $this->mdlmodel->__SET("laboratorio", $_POST["txtlaboratorio"]);
    $this->mdlmodel->__SET("item", $_POST["txtitem"]);
    $this->mdlmodel->__SET("precio", $_POST["txtprecio"]);
    $this->mdlmodel->__SET("vidautil", $_POST["txtvidautil"]);
    $this->mdlmodel->__SET("anoum", $_POST["txtanoum"]);
    $this->mdlmodel->__SET("horauso", $_POST["txthorasuso"]);
       $very= $this->mdlmodel->registrar();

    header('location: ' . URL . 'mantenimiento/index/'.$_POST["txtidnodo"]);

   }
############################## Fin método registrar ##############################

############################## Inicio método edit ##############################

	/*------------- Muestra el detalle del mantenimiento para modificar ---------------*/
	 public function edit($idmantenimiento,$idnodo)
	    {
	      $this->mdlmodel->__SET("idmantenimiento", $idmantenimiento);
	    	$datos = $this->mdlmodel->uno();
				$this->mdllaboratorio->__SET("idnodo", $idnodo);
	     	$laboratorio = $this->mdllaboratorio->consultalaboratorioo();
	     	require APP . 'view/_templates/headeradmin.php';
	     	require APP . 'view/mantenimiento/modificar.php';
				require APP . 'view/_footer/footerdinamizador.php';
	     }
############################## Fin método edit ##############################

############################## Inicio método modificar ##############################

	/*------------- Enviar datos para modificar el mantenimiento ---------------*/

     public function modificar()
   {
    $this->mdlmodel->__SET("idmantenimiento", $_POST["txtid"]);
   $this->mdlmodel->__SET("laboratorio", $_POST["txtlaboratorio"]);
    $this->mdlmodel->__SET("item", $_POST["txtitem"]);
    $this->mdlmodel->__SET("precio", $_POST["txtprecio"]);
    $this->mdlmodel->__SET("vidautil", $_POST["txtvidautil"]);
    $this->mdlmodel->__SET("anoum", $_POST["txtanoum"]);
    $this->mdlmodel->__SET("horauso", $_POST["txthorasuso"]);
    $very= $this->mdlmodel->modificar();

   header('location: ' . URL . 'mantenimiento/index/'.$_POST["txtidnodo"].'/#menu2');

   }
############################## Fin método modificar ##############################


    public function consultalaboratorio($laboratorio)
    {
        $this->mdlmodel->__SET("laboratorio", $laboratorio);
        $datos = $this->mdlmodel->consultalaboratorio();
        echo json_encode($datos);
    }



}
