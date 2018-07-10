<?php

class materiales extends Controller
{

	private $mdlmodel = null;

  function __construct(){
    $this->mdlmodel = $this->loadModel("mdlmateriales");
    $this->mdllaboratorio = $this->loadModel("mdllaboratorio");
  }

######################################## Inicio método index ########################################

/*-------- Método que muestra los materiales del nodo --------*/
	public function index($idnodo)
	{
		$this->mdllaboratorio->__SET("idnodo", $idnodo);
		$this->mdlmodel->__SET("idnodo", $idnodo);
	  $labo = $this->mdllaboratorio->consultalaboratorioo();
		$consultar = $this->mdlmodel->consultar();
	  $tipo = $this->mdlmodel->consultartipomaterial();
		require APP . 'view/_templates/headeradmin.php';
	  require APP . 'view/materiales/index.php';
		require APP . 'view/_footer/footerdinamizador.php';

	}
######################################## Fin método index ########################################


######################################## Inicio método edit ########################################

	/*-------- Muestra los datos del material (dinamizador) --------*/

	 public function edit($id, $idnodo)
	    {
				$this->mdllaboratorio->__SET('idnodo', $idnodo);
	      $labo = $this->mdllaboratorio->consultalaboratorioo();
	      $tipo = $this->mdlmodel->consultartipomaterial();
	      $this->mdlmodel->__SET("id", $id);
	      $datos = $this->mdlmodel->uno();
	      require APP . 'view/_templates/headeradmin.php';
	      require APP . 'view/materiales/modificar.php';
				require APP . 'view/_footer/footerdinamizador.php';

	    }
######################################## Fin método edit ########################################

######################################## Inicio método modificar ########################################

	/*-------- Envía los datos del material a modificar al modelo --------*/

     public function modificar()
   {

    $this->mdlmodel->__SET("id", $_POST["txtid"]);
    $this->mdlmodel->__SET("laboratorio", ucwords ($_POST["txtlaboratorio"]));
    $this->mdlmodel->__SET("tipo", $_POST["txttipo"]);
    $this->mdlmodel->__SET("cantidad", $_POST["txtcantidad"]);
    $this->mdlmodel->__SET("item", $_POST["txtitem"]);
    $this->mdlmodel->__SET("anoc", $_POST["txtano"]);
    $this->mdlmodel->__SET("horas", $_POST["txthoras"]);
    $this->mdlmodel->__SET("precio", $_POST["txtprecio"]);
    $very= $this->mdlmodel->modificar();
    header('location: ' . URL . 'materiales/index/'.$_POST["txtidnodo"].'/#menu2');
   }
	 ######################################## Fin método modificar ########################################


######################################## Inicio método registrar ########################################

	/*-------- Envía los datos del material al modelo para ser registrados --------*/

    public function registrar()
   {

    $this->mdlmodel->__SET("laboratorio", ucwords ($_POST["txtlaboratorio"]));
    $this->mdlmodel->__SET("tipo", $_POST["txttipo"]);
    $this->mdlmodel->__SET("cantidad", $_POST["txtcantidad"]);
    $this->mdlmodel->__SET("item", $_POST["txtitem"]);
    $this->mdlmodel->__SET("anoc", $_POST["txtano"]);
    $this->mdlmodel->__SET("horas", $_POST["txthoras"]);
    $this->mdlmodel->__SET("precio", $_POST["txtprecio"]);
    $very= $this->mdlmodel->registrar();
       header('location: ' . URL . 'materiales/index/'.$_POST["txtidnodo"]);

   }
######################################## Fin método registrar ########################################



}
