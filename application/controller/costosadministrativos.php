<?php

class costosadministrativos extends Controller
{

	private $mdlmodel = null;

  function __construct(){
    $this->mdlmodel = $this->loadModel("mdlcostosadministrativos");
		$this->mdlnodo = $this->loadModel("mdlnodo");
  }

    // METODO DEL INDEX
			public function index($idnodo){

		$this->mdlmodel->__SET("idnodo", $idnodo);
		$consultar = $this->mdlmodel->consultar();
		require APP . 'view/_templates/headeradmin.php';
	  require APP . 'view/costosadministrativos/index.php';
		require APP . 'view/_footer/footerdinamizador.php';

		}

		//--------------- Editar -----------------//
 		public function edit($idcostos){

	      $this->mdlmodel->__SET("idcostos", $idcostos);
	      $datos = $this->mdlmodel->uno();
	     require APP . 'view/_templates/headeradmin.php';
	     require APP . 'view/costosadministrativos/modificar.php';
			 require APP . 'view/_footer/footerdinamizador.php';

	    }

			//--------------- Método para guardar cambios -----------------//

     public function modificar(){

    $this->mdlmodel->__SET("idcostoadministrativo", $_POST["txtid"]);
    $this->mdlmodel->__SET("nombre", $_POST["nombretxt"]);
    $this->mdlmodel->__SET("valor", $_POST["txtvalor"]);
    $very= $this->mdlmodel->modificar();
    header('location: ' . URL . 'costosadministrativos/index/'.$_POST["idnodo"]);

   }

	 public function indexadmin()
  {
      $nodos = $this->mdlnodo->consultarnodos();
      require APP . 'view/_templates/headeradminodos.php';
      require APP . 'view/costosadministrativos/indexadmin.php';
			require APP . 'view/_footer/footeradminnodos.php';

  }

  /*=================================================================
  =            consultar costos administrativos por nodo            =
  =================================================================*/

  public function CostosAdministrativosPorNodo($nodo ='1')
  {
    $this->mdlmodel->__SET("nodo", $nodo);
    $datos = $this->mdlmodel->QueryCostosAdministrativosPorNodo();
    echo json_encode($datos);
  }


  /*=====  End of consultar costos administrativos por nodo  ======*/



}
