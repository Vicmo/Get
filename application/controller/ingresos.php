<?php
//modelo ingreso
class ingresos extends Controller
{
  //parametros
  private $mdlmodel = null;
  //construtor: llama autmaticamente el modelo inngreso
  function __construct(){
    $this->mdlmodel = $this->loadModel("mdlingreso");
  }

  //muestra pagina principal a las cuales se les pasan variables con consultas para mostrar en la vista
	public function index() {
      $servicio = $this->mdlmodel->consultaservicio();
      $ingresos = $this->mdlmodel->consultaingreso();
      $tipoper =  $this->mdlmodel->consultatipopersona();
      $tipodoc =  $this->mdlmodel->consultatipodoc();
	      require APP . 'view/_templates/headerinfocenter.php';
        require APP . 'view/ingresos/index.php';

	}

	public function ingresos_ajax() {


              if ($_POST["idPersona"] != 0 || $_POST["idPersona"] != null) {
                $this->mdlmodel->__SET("fecha", $_POST["fecha"]);
              $this->mdlmodel->__SET("descripcion", $_POST["descripcion"]);
              $this->mdlmodel->__SET("horaIngreso", $_POST["horaIngreso"]);
              $this->mdlmodel->__SET("horaSalida", $_POST["horaSalida"]);
               $this->mdlmodel->__SET("idPersona", $_POST["idPersona"]);
                $this->mdlmodel->__SET("servicios_idServicio", $_POST["servicios_idServicio"]);

              }else{
              $this->mdlmodel->__SET("numeroIdentificacion", $_POST["numeroIdentificacion"]);
              $this->mdlmodel->__SET("nombres", ucwords ($_POST["nombres"]));
              $this->mdlmodel->__SET("apellidos", ucwords ($_POST["apellidos"]));
              $this->mdlmodel->__SET("idTipoDocumento", $_POST["idTipoDocumento"]);
              $this->mdlmodel->__SET("idTipoPersona", $_POST["idTipoPersona"]);
              $this->mdlmodel->__SET("contacto", $_POST["contacto"]);
              $this->mdlmodel->__SET("correo", $_POST["correo"]);
              $this->mdlmodel->__SET("fecha", $_POST["fecha"]);
              $this->mdlmodel->__SET("descripcion", $_POST["descripcion"]);
              $this->mdlmodel->__SET("horaIngreso", $_POST["horaIngreso"]);
              $this->mdlmodel->__SET("horaSalida", $_POST["horaSalida"]);
              $this->mdlmodel->__SET("servicios_idServicio", $_POST["servicios_idServicio"]);
              }
                // echo json_encode(array("status" => false));
                echo json_encode(array("status" => true));
             $very= $this->mdlmodel->RegistrarIngreso();

	}

  //permite el registro e ingresp de ingreso de personas va dirigida a dos tablas : personas e ingresos
  public function RegistratIngreso()
   {

    // var_dump('expression');

    if ($_POST["idPersona"] != 0 || $_POST["idPersona"] != null) {
      $this->mdlmodel->__SET("fecha", $_POST["fecha"]);
    $this->mdlmodel->__SET("descripcion", $_POST["descripcion"]);
    $this->mdlmodel->__SET("horaIngreso", $_POST["horaIngreso"]);
    $this->mdlmodel->__SET("horaSalida", $_POST["horaSalida"]);
     $this->mdlmodel->__SET("idPersona", $_POST["idPersona"]);
      $this->mdlmodel->__SET("servicios_idServicio", $_POST["servicios_idServicio"]);

    }else{
    $this->mdlmodel->__SET("numeroIdentificacion", $_POST["numeroIdentificacion"]);
    $this->mdlmodel->__SET("nombres", ucwords ($_POST["nombres"]));
    $this->mdlmodel->__SET("apellidos", ucwords ($_POST["apellidos"]));
    $this->mdlmodel->__SET("idTipoDocumento", $_POST["idTipoDocumento"]);
    $this->mdlmodel->__SET("idTipoPersona", $_POST["idTipoPersona"]);
    $this->mdlmodel->__SET("contacto", $_POST["contacto"]);
    $this->mdlmodel->__SET("correo", $_POST["correo"]);
    $this->mdlmodel->__SET("fecha", $_POST["fecha"]);
    $this->mdlmodel->__SET("descripcion", $_POST["descripcion"]);
    $this->mdlmodel->__SET("horaIngreso", $_POST["horaIngreso"]);
    $this->mdlmodel->__SET("horaSalida", $_POST["horaSalida"]);
    $this->mdlmodel->__SET("servicios_idServicio", $_POST["servicios_idServicio"]);
    }

   $very= $this->mdlmodel->RegistrarIngreso();


  header('location: ' . URL . 'ingresos');

   }


    public function ConsultarIngresoDoc($numeroIdentificacion)
    {
        // var_dump($numeroIdentificacion);
        $this->mdlmodel->__SET("id", $numeroIdentificacion);
        $datos = $this->mdlmodel->ConsultaIngresoUsuario();
        echo json_encode($datos);
    }

    public function consultatipopersona($tipoper)
    {
      $this->mdlmodel->__SET("tipoper", $tipoper);
        $datos = $this->mdlmodel->consultatipopersona();
        echo json_encode($datos);
    }

    public function consultatipodoc($tipodoc)
    {
      $this->mdlmodel->__SET("tipodoc", $tipodoc);
        $datos = $this->mdlmodel->consultatipodoc();
        echo json_encode($datos);
    }







}
