<?php

class depreciacion extends Controller
{

	private $mdlmodel = null;
	private $mdllaboratorio = null;

  function __construct(){
    $this->mdlmodel = $this->loadModel("mdldepreciacion");
    $this->mdllaboratorio = $this->loadModel("mdllaboratorio");


  }
############################## Inicio método index ##############################

	/*------------- Consulta los laboratorio y depreciacion por nodo ---------------*/
	public function index($idnodo)
	{

			$this->mdllaboratorio->__SET('idnodo', $idnodo);
			$this->mdlmodel->__SET('idnodo', $idnodo);
      $laboratorio = $this->mdllaboratorio->consultalaboratorioo();
	    $consultadepreciacion = $this->mdlmodel->consultadepreciacion();
	    require APP . 'view/_templates/headeradmin.php';
      require APP . 'view/depreciacion/index.php';
			require APP . 'view/_footer/footerdinamizador.php';

	}
############################## Fin método index ##############################


############################## Inicio método registrar ##############################

/*------------- Envia los datos al modelo para registrar la depreciacion ---------------*/
	public function registrar()
   {

    $this->mdlmodel->__SET("laboratorio", $_POST["txtlaboratorio"]);
    $this->mdlmodel->__SET("equipo", ucwords ($_POST["txtequipo"]));
    $this->mdlmodel->__SET("marca", ucwords ($_POST["txtmarca"]));
    $this->mdlmodel->__SET("referencia", $_POST["txtreferencia"]);
    $this->mdlmodel->__SET("costo", $_POST["txtcosto"]);
    $this->mdlmodel->__SET("vidautil", $_POST["txtvidautil"]);
 		$this->mdlmodel->__SET("ano", $_POST["txtano"]);
    $this->mdlmodel->__SET("horauso", $_POST["txthorauso"]);
    $very= $this->mdlmodel->registrar();

       header('location: ' . URL . 'depreciacion/index/'. $_POST['txtidnodo']);

   }
############################## Fin método registrar ##############################

############################## Inicio método edit ##############################

	/*------------- Formulario para modificar la depreciacion ---------------*/

 public function edit($iddepreciacion, $idnodo)
    {
      $this->mdlmodel->__SET("iddepreciacion", $iddepreciacion);
			$this->mdlmodel->__SET("idnodo", $idnodo);
      $datos = $this->mdlmodel->uno();
			$this->mdllaboratorio->__SET("idnodo", $idnodo);
     $laboratorio = $this->mdllaboratorio->consultalaboratorioo();
     require APP . 'view/_templates/headeradmin.php';
     require APP . 'view/depreciacion/modificar.php';
		 require APP . 'view/_footer/footerdinamizador.php';
     }
############################## Fin método edit ##############################


############################## Inicio método modificar ##############################

	/*------------- Enviar los datos al modelo para ser modificados (depreciacion) ---------------*/

     public function modificar()
   {
    $this->mdlmodel->__SET("iddepreciacion", $_POST["txtid"]);
    $this->mdlmodel->__SET("laboratorio", $_POST["txtlaboratorio"]);
    $this->mdlmodel->__SET("equipo", ucwords ($_POST["txtequipo"]));
    $this->mdlmodel->__SET("marca", ucwords ($_POST["txtmarca"]));
    $this->mdlmodel->__SET("referencia", $_POST["txtreferencia"]);
    $this->mdlmodel->__SET("costo", $_POST["txtcosto"]);
    $this->mdlmodel->__SET("vidautil", $_POST["txtvidautil"]);
    $this->mdlmodel->__SET("ano", $_POST["txtano"]);
    $this->mdlmodel->__SET("horauso", $_POST["txthorasuso"]);
    $very= $this->mdlmodel->modificar();

   header('location: ' . URL . 'depreciacion/index/'.$_POST["txtidnodo"].'/#menu2');

   }
############################## Fin método modificar ##############################


    public function consultalaboratorio($laboratorio)
    {
        $this->mdlmodel->__SET("laboratorio", $laboratorio);
        $datos = $this->mdlmodel->consultalaboratorio();
        echo json_encode($datos);
    }



}
