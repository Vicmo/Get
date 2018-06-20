<?php

class personas extends Controller
{

  private $mdlmodel = null;

  function __construct(){
    $this->mdlmodel = $this->loadModel("mdlpersona");
  }

	public function index() {
      $consulta = $this->mdlmodel->consultapersona();
	      require APP . 'view/_templates/headerinfocenter.php';
        require APP . 'view/personas/index.php';

	}

    public function edit($idPersona)
    {
      $this->mdlmodel->__SET("idPersona", $idPersona);
      $datos = $this->mdlmodel->ver();
      $tipodoc = $this->mdlmodel->consultadoc();
      $tipoper = $this->mdlmodel->consultaper();
     require APP . 'view/_templates/headerinfocenter.php';
     require APP . 'view/personas/modificar.php';

    }

    public function modificar(){

    }

}
