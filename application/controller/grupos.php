<?php

class grupos extends Controller
{

  private $mdlmodel = null;

  function __construct(){
    $this->mdlmodel = $this->loadModel("mdlgrupos");
  }

    public function index($gestor)
  {
    $this->mdlmodel->__SET("gestor", $gestor);
    $consulta = $this->mdlmodel->consulta();
    require APP . 'view/_templates/headergestor.php';
    require APP . 'view/grupos/index.php';

    }

        public function indexad($idnodo)
  {
    $this->mdlmodel->__SET("idnodo", $idnodo);
    $consulta = $this->mdlmodel->consultaad();
    require APP . 'view/_templates/headeradmin.php';
    require APP . 'view/grupos/indexad.php';
    require APP . 'view/_footer/footerdinamizador.php';

    }


     public function registrar()
   {

    $documento= $_POST["txtgestor"];
    $this->mdlmodel->__SET("gestor", $_POST["txtgestor"]);
    $this->mdlmodel->__SET("nombre", ucwords ($_POST["txtnombre"]));
    $this->mdlmodel->__SET("institucion", ucwords ($_POST["txtinstitucion"]));
    $this->mdlmodel->__SET("clasificacion", $_POST["txtclasificacion"]);
    $this->mdlmodel->__SET("tipo", $_POST["txtipo"]);
    $this->mdlmodel->__SET("fecha", $_POST["txtfecha"]);
    $this->mdlmodel->__SET("observaciones", $_POST["txtobservaciones"]);
    $very= $this->mdlmodel->registrar();
    header('location: ' . URL . 'grupos/index/'. $documento);

   }

    public function edit($idgrupo)
    {
      $this->mdlmodel->__SET("idgrupo", $idgrupo);
      $datos = $this->mdlmodel->uno();
     require APP . 'view/_templates/headergestor.php';
     require APP . 'view/grupos/modificar.php';

    }

    public function modificar()
   {

    $documento= $_POST["txtgestor"];
    $this->mdlmodel->__SET("gestor", $documento);
    $this->mdlmodel->__SET("nombre", ucwords ($_POST["txtnombre"]));
    $this->mdlmodel->__SET("institucion", ucwords ($_POST["txtinstitucion"]));
    $this->mdlmodel->__SET("clasificacion", $_POST["txtclasificacion"]);
    $this->mdlmodel->__SET("tipo", $_POST["txtipo"]);
    $this->mdlmodel->__SET("fecha", $_POST["txtfecha"]);
    $this->mdlmodel->__SET("observacion", $_POST["txtobservacion"]);
    $this->mdlmodel->__SET("idgrupo", $_POST["txtid"]);
    $very= $this->mdlmodel->modificar();

   header('location: ' . URL . 'grupos/index/'. $documento.'#menu2');

   }
}
