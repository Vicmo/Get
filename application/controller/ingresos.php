<?php

class ingresos extends Controller
{

  private $mdlmodel = null;

  function __construct(){
    $this->mdlmodel = $this->loadModel("mdlingreso");
  }

	public function index() {
      $servicio = $this->mdlmodel->consultaservicio();
      $ingresos = $this->mdlmodel->consultaingreso();
	      require APP . 'view/_templates/headerinfocenter.php';
        require APP . 'view/ingresos/index.php';

	}

}
