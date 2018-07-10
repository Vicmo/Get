<?php

class proyecto extends Controller
{

	private $mdlmodel = null;

  function __construct(){

    $this->mdlmodel = $this->loadModel("mdlproyecto");
  }

	public function index($idnodo)
	{
		
    $this->mdlmodel->__SET("idnodo", $idnodo);
    $proyecto = $this->mdlmodel->consultaproyecto();
		require APP . 'view/_templates/headeradmin.php';
		require APP . 'view/proyecto/index.php';

    }



  public function gestor($gestor,$ano)
  {
    $this->mdlmodel->__SET("gestor", $gestor);
    $this->mdlmodel->__SET("ano", $ano);
    $ultima = $this->mdlmodel->consultaultima();
    $gestor = $this->mdlmodel->consultagestor();
    $sector = $this->mdlmodel->consultasector();
    $foco = $this->mdlmodel->consultafoco();
    $estadopro = $this->mdlmodel->consultaestadoproyecto();
    $tipoproyecto = $this->mdlmodel->consultatipoproyecto();
    $talentolider = $this->mdlmodel->consultalider();
    $proyecto = $this->mdlmodel->consultarproyecto();
    require APP . 'view/_templates/headergestor.php';
    require APP . 'view/proyecto/gestor.php';

    }

    public function registrar()
   {

    $ultima = $this->mdlmodel->consultaultima();
    $id = $ultima["ultima"];
    $ultimo = $this->mdlmodel->consultaultimo();
    $idp = $ultimo["ultimoid"];
    $documento= $_POST["gestortxt"];
    $this->mdlmodel->__SET("id", $id);
    $this->mdlmodel->__SET("idp", $idp);
    $this->mdlmodel->__SET("nombre", $_POST["txtnombre"]);
    $this->mdlmodel->__SET("descripcion", $_POST["txtdescripcion"]);
    $this->mdlmodel->__SET("fechacreacion", $_POST["fecha_crea"]);
    $this->mdlmodel->__SET("nit", $_POST["txtnit"]);
    $this->mdlmodel->__SET("razonsocial", $_POST["txtrazonsocial"]);
    $this->mdlmodel->__SET("sector", $_POST["txtsector"]);
    $this->mdlmodel->__SET("gestor", $_POST["gestortxt"]);
    $this->mdlmodel->__SET("foco", $_POST["txtfoco"]);
    $this->mdlmodel->__SET("estadoproyecto", $_POST["txtestadoproyecto"]);
    $this->mdlmodel->__SET("tipoproyecto", $_POST["txttipoproyecto"]);
    $this->mdlmodel->__SET("cedulalider", $_POST["txtcedulalider"]);
    $this->mdlmodel->__SET("observaciones", $_POST["txtobservaciones"]);
    $this->mdlmodel->__SET("pro_art_tecnoaca", $_POST["txtpro_art_tecnoaca"]);
    $this->mdlmodel->__SET("apre_apoyo", ($_POST["txtapre_apoyo"]));
    $this->mdlmodel->__SET("apre_sinapoyo", $_POST["txtapre_sinapoyo"]);
    $this->mdlmodel->__SET("arti_cti", $_POST["txtarti_cti"]);
    $this->mdlmodel->__SET("nom_act_cti", $_POST["txtnom_act_cti"]);
    $this->mdlmodel->__SET("diri_ar_emp", $_POST["txtdiri_ar_emp"]);
    $this->mdlmodel->__SET("reci_ar_emp", $_POST["txtreci_ar_emp"]);
    $this->mdlmodel->__SET("dine_rega", $_POST["txtdine_rega"]);
    $this->mdlmodel->__SET("aco_pro_pate", $_POST["txtaco_pro_pate"]);
    $this->mdlmodel->__SET("pata_publi", $_POST["txtpata_publi"]);
    $this->mdlmodel->__SET("id_pate", $_POST["txtidpatente"]);
    $very= $this->mdlmodel->registrar();


    $this->mdlmodel->__SET("proyecto", $id);
    $this->mdlmodel->__SET("talento", $_POST["txtcedulalider"]);
    $a = $this->mdlmodel->registrardetalle();

     for ($i=0; $i < count($_POST["txttalento"]); $i++) {
          $this->mdlmodel->__SET("proyecto", $id);
          $this->mdlmodel->__SET("talento", $_POST["txttalento"][$i]);
          $b= $this->mdlmodel->registrardetalle();
        }


    header('location: ' . URL . 'proyecto/gestor/'.$documento."/".date("Y"));


   }

   public function modificar(){

     $documento= $_POST["gestortxt"];
    $this->mdlmodel->__SET("id", $_POST["txtidproyecto"]);
    $this->mdlmodel->__SET("idp", $_POST["idproyectotxt"]);
    $this->mdlmodel->__SET("nombre", $_POST["txtnombre"]);
    $this->mdlmodel->__SET("descripcion", $_POST["txtdescripcion"]);
    $this->mdlmodel->__SET("fechacreacion", $_POST["fecha_crea"]);
    $this->mdlmodel->__SET("nit", $_POST["txtnit"]);
    $this->mdlmodel->__SET("razonsocial", $_POST["txtrazonsocial"]);
    $this->mdlmodel->__SET("sector", $_POST["txtsector"]);
    $this->mdlmodel->__SET("gestor", $_POST["gestortxt"]);
    $this->mdlmodel->__SET("foco", $_POST["txtfoco"]);
    $this->mdlmodel->__SET("estadoproyecto", $_POST["txtestadoproyecto"]);
    $this->mdlmodel->__SET("tipoproyecto", $_POST["txttipoproyecto"]);
    $this->mdlmodel->__SET("cedulalider", $_POST["txtcedulalider"]);
    $this->mdlmodel->__SET("observaciones", $_POST["txtobservaciones"]);
    $this->mdlmodel->__SET("pro_art_tecnoaca", $_POST["txtpro_art_tecnoaca"]);
    $this->mdlmodel->__SET("apre_apoyo", ($_POST["txtapre_apoyo"]));
    $this->mdlmodel->__SET("apre_sinapoyo", $_POST["txtapre_sinapoyo"]);
    $this->mdlmodel->__SET("arti_cti", $_POST["txtarti_cti"]);
    $this->mdlmodel->__SET("nom_act_cti", $_POST["txtnom_act_cti"]);
    $this->mdlmodel->__SET("diri_ar_emp", $_POST["txtdiri_ar_emp"]);
    $this->mdlmodel->__SET("reci_ar_emp", $_POST["txtreci_ar_emp"]);
    $this->mdlmodel->__SET("dine_rega", $_POST["txtdine_rega"]);
    $this->mdlmodel->__SET("aco_pro_pate", $_POST["txtaco_pro_pate"]);
    $this->mdlmodel->__SET("pata_publi", $_POST["txtpata_publi"]);
    $this->mdlmodel->__SET("id_pate", $_POST["txtidpatente"]);
    $this->mdlmodel->__SET("fechacierre", $_POST["fechacierre"]);
    $very= $this->mdlmodel->modificar();


    $this->mdlmodel->__SET("proyecto", $_POST["txtidproyecto"]);
    $c = $this->mdlmodel->eliminardetalle();

    $this->mdlmodel->__SET("proyecto", $_POST["txtidproyecto"]);
    $this->mdlmodel->__SET("talento", $_POST["txtcedulalider"]);
    $a = $this->mdlmodel->registrardetalle();

    for ($i=0; $i < count($_POST["txttalento"]); $i++) {
          $this->mdlmodel->__SET("proyecto", $_POST["txtidproyecto"]);
          $this->mdlmodel->__SET("talento", $_POST["txttalento"][$i]);
          $b= $this->mdlmodel->registrardetalle();
        }
          header('location: ' . URL . 'proyecto/gestor/'.$documento."/".date("Y").'#menu2');
   }



	 public function modificarentregables(){

     $documento= $_POST["gestortxt"];
    $this->mdlmodel->__SET("id", $_POST["txtidproyecto"]);
    $this->mdlmodel->__SET("actainicio", $_POST["campoactainicio"]);
    $this->mdlmodel->__SET("propuesta", $_POST["campopropuesta"]);
    $this->mdlmodel->__SET("bookplaneacion", $_POST["campobookp"]);
    $this->mdlmodel->__SET("cronograma", $_POST["campocrono"]);
    $this->mdlmodel->__SET("bookejecucion", $_POST["campobooke"]);
    $this->mdlmodel->__SET("lecciones", $_POST["campolecciones"]);
    $this->mdlmodel->__SET("ficha", $_POST["campoficha"]);
    $this->mdlmodel->__SET("video", $_POST["campovideo"]);
    $this->mdlmodel->__SET("actacierre", $_POST["campoacta"]);
    $this->mdlmodel->__SET("link", $_POST["txtlink"]);
    $this->mdlmodel->__SET("manualuso", $_POST["campomanualuso"]);
    $this->mdlmodel->__SET("avalgrupo", $_POST["campoavalgrupo"]);
		// var_dump( $_POST["campoavalgrupo"]);
		// exit;
    $very= $this->mdlmodel->modificarentregables();
    header('location: ' . URL . 'proyecto/gestor/'.$documento."/".date("Y").'#menu2');

   }

   public function modificaradmin(){


    $this->mdlmodel->__SET("id", $_POST["txtidproyecto"]);
    $this->mdlmodel->__SET("gestor", $_POST["txtgestor"]);
    $very= $this->mdlmodel->modificara();
    header('location: ' . URL . 'proyecto/index/'.$_POST["txtidnodo"]);
   }

    public function revisadofinal(){


    $this->mdlmodel->__SET("id", $_POST["txtidproyecto"]);
    $this->mdlmodel->__SET("revisadofinal", $_POST["txtrevisado"]);
    $very= $this->mdlmodel->revisadofinal();

    header('location: ' . URL . 'proyecto/index/'.$_POST["txtidnodo"]);
   }

    public function verp($idproyecto)
    {
         $this->mdlmodel->__SET("idproyecto", $idproyecto);
       $datos = $this->mdlmodel->verp();
         echo json_encode($datos);
    }

     public function consultaidp($idproyecto)
    {
         $this->mdlmodel->__SET("idproyecto", $idproyecto);
       $datos = $this->mdlmodel->consultaidp();
         echo json_encode($datos);
    }

     public function consultapatente($idproyecto)
    {
         $this->mdlmodel->__SET("idproyecto", $idproyecto);
       $datos = $this->mdlmodel->consultapatente();
         echo json_encode($datos);
    }

          public function detalletalen($idproyecto){
        $this->mdlmodel->__SET("idproyecto", $idproyecto);
        $datos = $this->mdlmodel->consultadetalletalen();
        echo json_encode($datos);
    }

        public function consultagestorl($linea)
    {
        $this->mdlmodel->__SET("linea", $linea);
        $datos = $this->mdlmodel->consultagestorl();
        echo json_encode($datos);
    }


        public function consultafocoo($linea)
    {
        $this->mdlmodel->__SET("linea", $linea);
        $datos = $this->mdlmodel->consultafocoo();
        echo json_encode($datos);
    }

    public function edit($idproyecto)
    {
      $this->mdlmodel->__SET("idproyecto", $idproyecto);
      $datos = $this->mdlmodel->verp();
      $gestor = $this->mdlmodel->consultagestor();
      $sector = $this->mdlmodel->consultasector();
      $foco = $this->mdlmodel->consultafoco();
      $estadopro = $this->mdlmodel->consultaestadoproyectoo();
      $tipoproyecto = $this->mdlmodel->consultatipoproyecto();
      $talentolider = $this->mdlmodel->consultalider();

     require APP . 'view/_templates/headergestor.php';
     require APP . 'view/proyecto/modificar.php';

    }


     public function entregables($idproyecto)
    {
      $this->mdlmodel->__SET("idproyecto", $idproyecto);
      $datos = $this->mdlmodel->verp();
     require APP . 'view/_templates/headergestor.php';
     require APP . 'view/proyecto/entregables.php';

    }


 #--------------------------Metodo para visualizar los entregables del proyecto (lo hace el dinamizador)---------------------------#
     public function entregablesa($idproyecto)
    {
      $this->mdlmodel->__SET("idproyecto", $idproyecto);
      $datos = $this->mdlmodel->verp();
     require APP . 'view/_templates/headeradmin.php';
     require APP . 'view/proyecto/entregablesa.php';

    }


 #--------------------------Metodo para editar el gestor de un proyecto (lo hace el dinamizador)---------------------------#
        public function edit2($idproyecto)
    {
      $this->mdlmodel->__SET("idproyecto", $idproyecto);
      $datos = $this->mdlmodel->verp();
      // $gestor = $this->mdlmodel->consultagestor();
      // $sector = $this->mdlmodel->consultasector();
      // $foco = $this->mdlmodel->consultafoco();
      // $estadopro = $this->mdlmodel->consultaestadoproyectoo();
      // $tipoproyecto = $this->mdlmodel->consultatipoproyecto();
      // $talentolider = $this->mdlmodel->consultalider();

     require APP . 'view/_templates/headeradmin.php';
     require APP . 'view/proyecto/modificaradmin.php';

    }

       public function ultima()
    {
        $datos = $this->mdlmodel->consultaultima();
        echo json_encode($datos);
    }


        public function ultimo()
    {
        $datos = $this->mdlmodel->consultaultimo();
        echo json_encode($datos);
    }


  }
