<?php

class mantenimiento extends Controller
{
	
	private $mdlmodel = null;

  function __construct(){
    $this->mdlmodel = $this->loadModel("mdlmantenimiento");
    
   
  }

	public function index()
	{
	
	    
     $laboratorio = $this->mdlmodel->consultalaboratorioo();
	   $consultamantenimiento = $this->mdlmodel->consultamantenimiento();
	    require APP . 'view/_templates/headeradmin.php';
       require APP . 'view/mantenimiento/index.php';
		
	}
	public function registrar()
   {
    
    $this->mdlmodel->__SET("laboratorio", $_POST["txtlaboratorio"]);
    $this->mdlmodel->__SET("item", $_POST["txtitem"]);
    $this->mdlmodel->__SET("precio", $_POST["txtprecio"]);
    $this->mdlmodel->__SET("vidautil", $_POST["txtvidautil"]);
    $this->mdlmodel->__SET("anoum", $_POST["txtanoum"]);
    $this->mdlmodel->__SET("horauso", $_POST["txthorasuso"]);
       $very= $this->mdlmodel->registrar(); 

    header('location: ' . URL . 'mantenimiento');

   }

 public function edit($idmantenimiento)
    {
      $this->mdlmodel->__SET("idmantenimiento", $idmantenimiento);
    $datos = $this->mdlmodel->uno();
     $laboratorio = $this->mdlmodel->consultalaboratorioo();
     require APP . 'view/_templates/headeradmin.php';
     require APP . 'view/mantenimiento/modificar.php';
     }

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

   header('location: ' . URL . 'mantenimiento/index/#menu2');
  
   } 


    public function consultalaboratorio($laboratorio)
    {
        $this->mdlmodel->__SET("laboratorio", $laboratorio);
        $datos = $this->mdlmodel->consultalaboratorio();
        echo json_encode($datos);
    }


    
}
