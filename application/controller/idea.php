<?php

class idea extends Controller
{
	
	private $mdlmodel = null;

  function __construct(){

    $this->mdlmodel = $this->loadModel("mdlidea");
  }

	public function index()
	{
		require APP . 'view/idea/index.php';
     
    }

    
    public function indexc()
  {

    $idea = $this->mdlmodel->consultaidea();
    require APP . 'view/_templates/headerinfocenter.php';
    require APP . 'view/idea/indexc.php';
     
    }


public function registrar()
   {
    
    $this->mdlmodel->__SET("nombres", ucwords ($_POST["txtnombres"]));
    $this->mdlmodel->__SET("apellidos", ucwords ($_POST["txtapellidos"]));
    $this->mdlmodel->__SET("correo", $_POST["txtcorreo"]);
    $this->mdlmodel->__SET("telefono", $_POST["txttelefono"]);
    $this->mdlmodel->__SET("nombreproyecto", $_POST["txtnombreproyecto"]);
    $this->mdlmodel->__SET("aprendizsena", $_POST["txtaprendizsena"]);
    $this->mdlmodel->__SET("pregunta1", $_POST["txtpregunta1"]);
    $this->mdlmodel->__SET("pregunta2", $_POST["txtpregunta2"]);
    $this->mdlmodel->__SET("pregunta3", $_POST["txtpregunta3"]);
    $this->mdlmodel->__SET("descripcion", $_POST["txtdescripcion"]);
    $this->mdlmodel->__SET("objetivo", $_POST["txtobjetivo"]);
    $this->mdlmodel->__SET("alcance", $_POST["txtalcance"]);
    $this->mdlmodel->__SET("fecha", $_POST["txtfecha"]);

          
   $very= $this->mdlmodel->registraridea();
    
  header('location: ' . URL . 'idea'); 
  
   }


       public function veridea($id)
    {
        $this->mdlmodel->__SET("id", $id);
        $datos = $this->mdlmodel->veridea();
        echo json_encode($datos);
    }


  

}
