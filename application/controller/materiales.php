<?php

class materiales extends Controller
{

	private $mdlmodel = null;

  function __construct(){
    $this->mdlmodel = $this->loadModel("mdlmateriales");
  }

	public function index()
	{
  $labo = $this->mdlmodel->consultarlabo();
	$consultar = $this->mdlmodel->consultar();
  $tipo = $this->mdlmodel->consultartp();
	require APP . 'view/_templates/headeradmin.php';
  require APP . 'view/materiales/index.php';

	}


 public function edit($id)
    {
      $labo = $this->mdlmodel->consultarlabo();
      $tipo = $this->mdlmodel->consultartp();
      $this->mdlmodel->__SET("id", $id);
      $datos = $this->mdlmodel->uno();
      require APP . 'view/_templates/headeradmin.php';
      require APP . 'view/materiales/modificar.php';

    }

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
    header('location: ' . URL . 'materiales/index/#menu2');
   }

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
       header('location: ' . URL . 'materiales');

   }



}
