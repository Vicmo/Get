<?php

class costos extends Controller
{

	private $mdlmodel = null;

  function __construct(){
    $this->mdlproyecto = $this->loadModel("mdlproyecto");
     $this->mdlmodel = $this->loadModel("mdlcostos");

  }

    public function index()
    {
    $proyecto = $this->mdlmodel->consultaproyectoc();
        require APP . 'view/_templates/headeradmin.php';
        require APP . 'view/costos/index.php';

    }

    public function gestor($documento, $ano){
    $this->mdlmodel->__SET("documento", $documento);
    $this->mdlmodel->__SET("ano", $ano);
    $proyecto = $this->mdlmodel->consultaproyectogestor();
		require APP . 'view/_templates/headergestor.php';
		require APP . 'view/costos/indexgestor.php';
	}

       public function consultacp($id)
    {
        $this->mdlproyecto->__SET("id", $id);
        $datos = $this->mdlproyecto->consultacp();
        echo json_encode($datos);
    }


    public function horasasesoria($id)
    {
        $this->mdlmodel->__SET("id", $id);
        $datos = $this->mdlmodel->horasasesoria();
        echo json_encode($datos);
    }


     public function costosgestor($id)
    {
        $this->mdlmodel->__SET("id", $id);
        $datos = $this->mdlmodel->costosgestor();
        echo json_encode($datos);
    }

     public function costosadmin()
    {
        $datos = $this->mdlmodel->costosadmin();
        echo json_encode($datos);
    }

     public function valoradmin($id)
    {
        $this->mdlmodel->__SET("id", $id);
        $datos = $this->mdlmodel->valoradmin();
        echo json_encode($datos);
    }

     public function costosdepreciacion($id)
    {
        $this->mdlmodel->__SET("id", $id);
        $datos = $this->mdlmodel->costosdepreciacion();
        echo json_encode($datos);
    }


  public function costosmantenimiento($id)
    {
        $this->mdlmodel->__SET("id", $id);
        $datos = $this->mdlmodel->costosmantenimiento();
        echo json_encode($datos);
    }

     public function costosmateriales($id)
    {
        $this->mdlmodel->__SET("id", $id);
        $datos = $this->mdlmodel->costosmateriales();
        echo json_encode($datos);
    }




}
