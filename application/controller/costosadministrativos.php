<?php

class costosadministrativos extends Controller
{

	private $mdlmodel = null;

  function __construct(){
    $this->mdlmodel = $this->loadModel("mdlcostosadministrativos");

  }

    // METODO DEL INDEX
			public function index($idnodo){

		$this->mdlmodel->__SET("idnodo", $idnodo);
		$consultar = $this->mdlmodel->consultar();
		require APP . 'view/_templates/headeradmin.php';
	  require APP . 'view/costosadministrativos/index.php';

		}

		//--------------- Editar -----------------//
 		public function edit($idcostos){

	      $this->mdlmodel->__SET("idcostos", $idcostos);
	      $datos = $this->mdlmodel->uno();
	     require APP . 'view/_templates/headeradmin.php';
	     require APP . 'view/costosadministrativos/modificar.php';

	    }

			//--------------- Método para guardar cambios -----------------//

     public function modificar(){

    $this->mdlmodel->__SET("idcostoadministrativo", $_POST["txtid"]);
    $this->mdlmodel->__SET("nombre", $_POST["nombretxt"]);
    $this->mdlmodel->__SET("valor", $_POST["txtvalor"]);
    $very= $this->mdlmodel->modificar();
    header('location: ' . URL . 'costosadministrativos/index/'.$_POST["idnodo"]);

   }



}
