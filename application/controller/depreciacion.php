<?php

class depreciacion extends Controller
{
	
	private $mdlmodel = null;

  function __construct(){
    $this->mdlmodel = $this->loadModel("mdldepreciacion");
    
   
  }

	public function index()
	{
	
	    
      $laboratorio = $this->mdlmodel->consultalaboratorioo();
	    $consultadepreciacion = $this->mdlmodel-> consultadepreciacion();
	    require APP . 'view/_templates/headeradmin.php';
       require APP . 'view/depreciacion/index.php';
		
	}
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
      
       header('location: ' . URL . 'depreciacion');

   }

 public function edit($iddepreciacion)
    {
      $this->mdlmodel->__SET("iddepreciacion", $iddepreciacion);
      $datos = $this->mdlmodel->uno();
     $laboratorio = $this->mdlmodel->consultalaboratorioo();
     require APP . 'view/_templates/headeradmin.php';
     require APP . 'view/depreciacion/modificar.php';
     }

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

   header('location: ' . URL . 'depreciacion/index/#menu2');
  
   } 


    public function consultalaboratorio($laboratorio)
    {
        $this->mdlmodel->__SET("laboratorio", $laboratorio);
        $datos = $this->mdlmodel->consultalaboratorio();
        echo json_encode($datos);
    }


    
}
