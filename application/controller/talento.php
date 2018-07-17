<?php

class talento extends Controller
{

	private $mdlmodel = null;

  function __construct(){

    $this->mdlmodel = $this->loadModel("mdltalento");
    $this->mdlcuentas = $this->loadModel("mdlcuentas");
     $this->mdlgestor = $this->loadModel("mdlgestor");
     // $this->mdlproyecto = $this->loadModel("mdlproyecto");
  }

################################### Inicio método index ############################

	#---------------------- Método que lista todos los talentos por gestor (lo ve el gestor)----------------------#

	public function index($persona)
	{
        $this->mdlmodel->__SET("idges", $persona);
        $consultatalento = $this->mdlmodel->consultatalentog();
        $tipodoc = $this->mdlmodel->consultatipodoc();
        $ocu = $this->mdlmodel->consultaocu();
        $tipotale = $this->mdlmodel->consultatipotale();
        $depto = $this->mdlmodel->consultadepto();
        $nivelaca = $this->mdlmodel->consultanivelaca();

				require APP . 'view/_templates/headergestor.php';
				require APP . 'view/talento/index.php';
				require APP . 'view/_footer/footergestor.php';

    }
################################### Fin método index ############################


################################### Inicio método admin ############################

 #----------------------Método que lista todos los talentos por nodo (lo ve el dinamizador del nodo)----------------------#
  public function admin($idnodo)
  {
        $this->mdlmodel->__SET("idnodo", $idnodo);
        $consultatalento = $this->mdlmodel->reportestalentosadmin();
				$this->mdlgestor->__SET("idnodo", $idnodo);
				$linea = $this->mdlgestor->lineasnodo();
        $gestor = $this->mdlgestor->consultargestor();
				require APP . 'view/_templates/headeradmin.php';
				require APP . 'view/talento/admin.php';
				require APP . 'view/_footer/footerdinamizador.php';

    }

################################### Fin método admin ############################


################################### Inicio método verproyectotalento ############################

 #----------------------Método que lista todos los proyectos asociado al talento por Ajax----------------------#
		  public function verproyectotalento($idpersona)
		  {
				$this->mdlmodel->__SET("idpersona", $idpersona);
				$datos = $this->mdlmodel->verproyectotalento();
				echo json_encode($datos);
		    }

################################### Fin método verproyectotalento ############################



public function registrar()
   {
    $documento= $_POST["gestortxt"];
    $this->mdlmodel->__SET("documento", $_POST["txtdocumento"]);
    $this->mdlmodel->__SET("tipodocumento", $_POST["txttipodocumento"]);
    $this->mdlmodel->__SET("nombres", ucwords ($_POST["txtnombre"]));
    $this->mdlmodel->__SET("apellidos", ucwords ($_POST["txtapellido"]));
    $this->mdlmodel->__SET("fechanacimiento", $_POST["fecha_naci"]);
    $this->mdlmodel->__SET("ocupacion", $_POST["txtocupacion"]);
    $this->mdlmodel->__SET("genero", $_POST["txtgenero"]);
    $this->mdlmodel->__SET("tipotalento", $_POST["txttipotaleto"]);
    $this->mdlmodel->__SET("correo", $_POST["txtcorreo"]);
    $this->mdlmodel->__SET("numerofijo", $_POST["txtnum_fijo"]);
    $this->mdlmodel->__SET("numerocelular", $_POST["txtnum_cel"]);
    $this->mdlmodel->__SET("ciudad", $_POST["txtciudad"]);
    $this->mdlmodel->__SET("direccion", $_POST["txtdireccion"]);
    $this->mdlmodel->__SET("estrato", $_POST["txtestrato"]);
    $this->mdlmodel->__SET("nivelacademico", ucwords($_POST["txtnivel_aca"]));
    $this->mdlmodel->__SET("titulobtenido", $_POST["txttitu_obte"]);
    $this->mdlmodel->__SET("anoterminacion", $_POST["txtaño_termi"]);
    $this->mdlmodel->__SET("institucion", $_POST["txtinstitucion"]);
    $this->mdlmodel->__SET("des_ocu", ucwords($_POST["txtdes_ocu"]));
    $very= $this->mdlmodel->registrartalento();

    $this->mdlcuentas->__SET("rol",3);
    $this->mdlcuentas->__SET("correo", $_POST["txtcorreo"]);
    $this->mdlcuentas->__SET("clave", MD5($_POST["txtdocumento"]));
    $veryy= $this->mdlcuentas->registrarcuenta();


    header('location: ' . URL . 'talento/index/'.date("Y")."/".$documento);



   }

##################################################################################
#															Inicio método ver																	#
##################################################################################
#---------------- Ver el detalles del talento según el id -----------------------#
public function ver($idpersona)
    {
         $this->mdlmodel->__SET("idpersona", $idpersona);
       $datos = $this->mdlmodel->ver();
         echo json_encode($datos);
    }

##################################################################################
#														  	Fin método ver																	#
##################################################################################

##################################################################################
#															Inicio método reporte															#
##################################################################################
#----------------------------- Método para mostrar los talentos filtrados por año -----------------------------#
public function reporte($ano,$nodo)
    {

      $this->mdlmodel->__SET("ano", $ano);
      $this->mdlmodel->__SET("idnodo", $nodo);
      $datos = $this->mdlmodel->reportestalentosadmin();
      echo json_encode($datos);

    }

##################################################################################
#															Fin método reporte																#
##################################################################################



    public function slctpro()
    {
       $datos = $this->mdlmodel->consultatalento();
       echo json_encode($datos);
    }

    public function correo($correo)
    {
         $this->mdlmodel->__SET("correo", $correo);
         $datos = $this->mdlmodel->correo();
         echo json_encode($datos);
    }

     public function edit($documento)
    {
      $this->mdlmodel->__SET("documento", $documento);
      $datos = $this->mdlmodel->ver();
      $tipodoc = $this->mdlmodel->consultatipodoc();
      $ocu = $this->mdlmodel->consultaocu();
      $tipotale = $this->mdlmodel->consultatipotale();
      $ciudad = $this->mdlmodel->consultaciudad();
      $nivelaca = $this->mdlmodel->consultanivelaca();
      $consultatalento = $this->mdlmodel->consultatalento();
     require APP . 'view/_templates/headergestor.php';
     require APP . 'view/talento/modificar.php';

    }
    public function modificar()
   {
    $documento= $_POST["gestortxt"];
    $this->mdlmodel->__SET("documento", $_POST["txtd"]);
    $this->mdlmodel->__SET("tipodocumento", $_POST["txttipodocumento"]);
    $this->mdlmodel->__SET("nombres", ucwords ($_POST["txtnombre"]));
    $this->mdlmodel->__SET("apellidos", ucwords ($_POST["txtapellido"]));
    $this->mdlmodel->__SET("fechanacimiento", $_POST["fecha_naci"]);
    $this->mdlmodel->__SET("ocupacion", $_POST["txtocupacion"]);
    $this->mdlmodel->__SET("genero", $_POST["txtgenero"]);
    $this->mdlmodel->__SET("tipotalento", $_POST["txttipotaleto"]);
    $this->mdlmodel->__SET("correo", $_POST["txtcorreo"]);
    $this->mdlmodel->__SET("numerofijo", $_POST["txtnum_fijo"]);
    $this->mdlmodel->__SET("numerocelular", $_POST["txtnum_cel"]);
    $this->mdlmodel->__SET("ciudad", $_POST["txtciudad"]);
    $this->mdlmodel->__SET("direccion", $_POST["txtdireccion"]);
    $this->mdlmodel->__SET("estrato", $_POST["txtestrato"]);
    $this->mdlmodel->__SET("nivelacademico", ucwords($_POST["txtnivel_aca"]));
    $this->mdlmodel->__SET("titulobtenido", $_POST["txttitu_obte"]);
    $this->mdlmodel->__SET("anoterminacion", $_POST["txtaño_termi"]);
    $this->mdlmodel->__SET("institucion", $_POST["txtinstitucion"]);
    $this->mdlmodel->__SET("des_ocu", ucwords($_POST["txtdes_ocu"]));
    $very= $this->mdlmodel->modificartalento();

    $this->mdlcuentas->__SET("id", $_POST["idc"]);
    $this->mdlcuentas->__SET("correo", $_POST["txtcorreo"]);
    $veryy= $this->mdlcuentas->modificarcuenta();
    // header('location: ' . URL . 'talento/index/#menu2');

     header('location: ' . URL . 'talento/index/'.date("Y")."/".$documento."/#menu2");

   }

}
