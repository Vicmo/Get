<?php

class usoinfraestructura extends Controller
{
	
	private $mdlmodel = null;

  function __construct(){
    $this->mdlproyecto = $this->loadModel("mdlproyecto");
    $this->mdltalento = $this->loadModel("mdltalento");
    $this->mdlmodel = $this->loadModel("mdlusoinfraestructura");
  }

	public function index($gestor)
	{

    $this->mdlmodel->__SET("gestor", $gestor); 
    $consulta = $this->mdlmodel->consultar();
		require APP . 'view/_templates/headergestor.php';
		require APP . 'view/usoinfraestructura/index.php';
		
	}

    public function talento()
  {
    $ultima = $this->mdlmodel->consultaultima();
    $consulta = $this->mdlmodel->consultar();
    require APP . 'view/_templates/headertalento.php';
    require APP . 'view/usoinfraestructura/indext.php';
    
  }

	 public function consultaselect($proyecto)
    {
        $this->mdlproyecto->__SET("proyecto", $proyecto);
        $datos = $this->mdlproyecto->consultausod();
        echo json_encode($datos);
    }

     public function consultaselectp($gestor)
    {
        $this->mdlproyecto->__SET("gestor", $gestor);
        $datos = $this->mdlproyecto->consultausop();
        echo json_encode($datos);
    }

     public function consultaselectp2($talento)
    {
        $this->mdlproyecto->__SET("talento", $talento);
        $datos = $this->mdlproyecto->consultausot();
        echo json_encode($datos);
    }

      public function consultalabo($linea)
    {
        $this->mdlmodel->__SET("linea", $linea);
        $datos = $this->mdlmodel->consultalabo();
        echo json_encode($datos);
    }

         public function detallelabo($uso)
    {
        $this->mdlmodel->__SET("uso", $uso);
        $datos = $this->mdlmodel->consultardetallelabo();
        echo json_encode($datos);
    }

         public function detalletalen($uso)
    {
        $this->mdlmodel->__SET("uso", $uso);
        $datos = $this->mdlmodel->consultadetalletalen();
        echo json_encode($datos);
    }
    
     public function registrar()
    {

        $ultima = $this->mdlmodel->consultaultima();
        $id = $ultima["ultima"];
        $this->mdlmodel->__SET("fecha", $_POST["txtfecha"]);
        $this->mdlmodel->__SET("proyecto", $_POST["txtproyecto"]);
        $this->mdlmodel->__SET("asesoriad", $_POST["txtad"]);
        $this->mdlmodel->__SET("asesoriai", $_POST["txtai"]);
        $this->mdlmodel->__SET("descripcion",$_POST["txtdes"]);
        $this->mdlmodel->__SET("gestor", $_POST["txtdocumento"]);
        $this->mdlmodel->__SET("id", $id);
        $very= $this->mdlmodel->registrar();
        $documento= $_POST["txtdocumento"];

        for ($i=0; $i < count($_POST["txtidlabo"]); $i++) {
          $this->mdlmodel->__SET("uso", $id);
          $this->mdlmodel->__SET("laboratorio", $_POST["txtidlabo"][$i]);
          $this->mdlmodel->__SET("tiempo", $_POST["txtiempo"][$i]);
          $very= $this->mdlmodel->registrardl();
        }

         for ($i=0; $i < count($_POST["txttalento"]); $i++) {
          $this->mdlmodel->__SET("uso", $id);
          $this->mdlmodel->__SET("talento", $_POST["txttalento"][$i]);
          $very= $this->mdlmodel->registrardt();
        }
        header('location: ' . URL . 'usoinfraestructura/index/'. $documento);
       

    }

         public function registrart()
    {

        $ultima = $this->mdlmodel->consultaultima();
        $id = $ultima["ultima"];
        $this->mdlmodel->__SET("fecha", $_POST["txtfecha"]);
        $this->mdlmodel->__SET("proyecto", $_POST["txtproyecto"]);
        $this->mdlmodel->__SET("asesoriad", $_POST["txtad"]); 
        $this->mdlmodel->__SET("asesoriai", $_POST["txtai"]);
        $this->mdlmodel->__SET("descripcion",$_POST["txtdes"]);
        $this->mdlmodel->__SET("gestor", $_POST["txtdocumentoo"]);
        $this->mdlmodel->__SET("id", $id);
        $very= $this->mdlmodel->registrar();

        for ($i=0; $i < count($_POST["txtidlabo"]); $i++) {
          $this->mdlmodel->__SET("uso", $id);
          $this->mdlmodel->__SET("laboratorio", $_POST["txtidlabo"][$i]);
          $this->mdlmodel->__SET("tiempo", $_POST["txtiempo"][$i]);
          $very= $this->mdlmodel->registrardl();
        }

         for ($i=0; $i < count($_POST["txttalento"]); $i++) {
          $this->mdlmodel->__SET("uso", $id);
          $this->mdlmodel->__SET("talento", $_POST["txttalento"][$i]);
          $very= $this->mdlmodel->registrardt();
        }
         header('location: ' . URL . 'usoinfraestructura/talento');

    }

        public function edit($id)
    {
      $this->mdlmodel->__SET("id", $id);
      $datos = $this->mdlmodel->consultauno();
     require APP . 'view/_templates/headergestor.php';
     require APP . 'view/usoinfraestructura/modificar.php';
     
    }
     public function modificar()
    {
        $documento= $_POST["txtdocumento"];
        $this->mdlmodel->__SET("idusoinfraestructura", $_POST["txtid"]);
        $this->mdlmodel->__SET("asesoriad", $_POST["txtad"]);
        $this->mdlmodel->__SET("asesoriai", $_POST["txtai"]);
        $this->mdlmodel->__SET("descripcion", $_POST["txtdes"]);
        $very= $this->mdlmodel->modificar();
         header('location: ' . URL . 'usoinfraestructura/index/'.$documento.'#menu2');
        
    
    }

     public function cambiarestado(){
        $this->mdlmodel->__SET("idusoinfraestructura", $_POST["id"]);
        $this->mdlmodel->__SET("estado", $_POST["estado"]);
        $very= $this->mdlmodel->modificarestado();
        if ($very) {
            echo json_encode(["v"=>1]);
        }else{
            echo json_encode(["v"=>0]);

        }
 
    
    }

      public function ultima()
    {
        $datos = $this->mdlmodel->consultaultima();
        echo json_encode($datos);
    }
    
}

