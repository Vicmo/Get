<?php

class reportes extends Controller
{

		private $mdlmodel = null;

  function __construct(){

     $this->mdlmodel = $this->loadModel("mdlreportes");
       $this->mdlgestor = $this->loadModel("mdlgestor");

   
  }
	
	public function index()
	{
         $linea = $this->mdlgestor->consultalineaa();
           $gestor = $this->mdlgestor->consultargestor();
		require APP . 'view/_templates/headeradmin.php';
		require APP . 'view/reportes/index.php';
     
    }



            public function reportetalentos($ano)
    {
        $this->mdlmodel->__SET("ano", $ano);
        $datos = $this->mdlmodel->reportetalentos();
        echo json_encode($datos);
    }

               public function reportetalentoslinea($ano,$linea)
    {
        $this->mdlmodel->__SET("ano", $ano);
        $this->mdlmodel->__SET("linea", $linea);
        $datos = $this->mdlmodel->reportetalentoslinea();
        echo json_encode($datos);
    }

                  public function reportetalentosgestor($ano,$gestor)
    {
        $this->mdlmodel->__SET("ano", $ano);
        $this->mdlmodel->__SET("gestor", $gestor);
        $datos = $this->mdlmodel->reportetalentosgestor();
        echo json_encode($datos);
    }


    	 public function reportemantenimientolinea($fi,$ff,$l)
    {
        $this->mdlmodel->__SET("fi", $fi);
        $this->mdlmodel->__SET("ff", $ff);
        $this->mdlmodel->__SET("l", $l);
        $datos = $this->mdlmodel->reportemantenimientolinea();
        echo json_encode($datos);
    }


       public function reporteasesoriaslinea($fi,$ff,$l)
    {
        $this->mdlmodel->__SET("fi", $fi);
        $this->mdlmodel->__SET("ff", $ff);
        $this->mdlmodel->__SET("l", $l);
        $datos = $this->mdlmodel->reporteasesoriaslinea();
        echo json_encode($datos);
    }

     public function reportematerialeslinea($fi,$ff,$l)
    {
        $this->mdlmodel->__SET("fi", $fi);
        $this->mdlmodel->__SET("ff", $ff);
        $this->mdlmodel->__SET("l", $l);
        $datos = $this->mdlmodel->reportematerialeslinea();
        echo json_encode($datos);
    }


       public function reporte($fi,$ff,$l)
    {
        $this->mdlmodel->__SET("fi", $fi);
        $this->mdlmodel->__SET("ff", $ff);
        $this->mdlmodel->__SET("l", $l);
        $datos = $this->mdlmodel->reporte();
        echo json_encode($datos);
    }

          public function reporteadminlinea($fi,$ff,$l)
    {
        $this->mdlmodel->__SET("fi", $fi);
        $this->mdlmodel->__SET("ff", $ff);
        $this->mdlmodel->__SET("l", $l);
        $datos = $this->mdlmodel->reporteadminlinea();
        echo json_encode($datos);
    }

          public function reportedepreciacionlinea($fi,$ff,$l)
    {
        $this->mdlmodel->__SET("fi", $fi);
        $this->mdlmodel->__SET("ff", $ff);
        $this->mdlmodel->__SET("l", $l);
        $datos = $this->mdlmodel->reportedepreciacionlinea();
        echo json_encode($datos);
    }


       public function reporteg($fi,$ff,$g)
    {
        $this->mdlmodel->__SET("fi", $fi);
        $this->mdlmodel->__SET("ff", $ff);
        $this->mdlmodel->__SET("g", $g);
        $datos = $this->mdlmodel->reporteg();
        echo json_encode($datos);
    }


         public function reportemantenimientogestor($fi,$ff,$g)
    {
         $this->mdlmodel->__SET("fi", $fi);
        $this->mdlmodel->__SET("ff", $ff);
        $this->mdlmodel->__SET("g", $g);
        $datos = $this->mdlmodel->reportemantenimientogestor();
        echo json_encode($datos);
    }


       public function reporteasesoriasgestor($fi,$ff,$g)
    {
        $this->mdlmodel->__SET("fi", $fi);
        $this->mdlmodel->__SET("ff", $ff);
         $this->mdlmodel->__SET("g", $g);
        $datos = $this->mdlmodel->reporteasesoriasgestor();
        echo json_encode($datos);
    }

     public function reportematerialesgestor($fi,$ff,$g)
    {
        $this->mdlmodel->__SET("fi", $fi);
        $this->mdlmodel->__SET("ff", $ff);
         $this->mdlmodel->__SET("g", $g);
        $datos = $this->mdlmodel->reportematerialesgestor();
        echo json_encode($datos);
    }

          public function reporteadmingestor($fi,$ff,$g)
    {
        $this->mdlmodel->__SET("fi", $fi);
        $this->mdlmodel->__SET("ff", $ff);
        $this->mdlmodel->__SET("g", $g);
        $datos = $this->mdlmodel->reporteadmingestor();
        echo json_encode($datos);
    }

          public function reportedepreciaciongestor($fi,$ff,$g)
    {
        $this->mdlmodel->__SET("fi", $fi);
        $this->mdlmodel->__SET("ff", $ff);
         $this->mdlmodel->__SET("g", $g);
        $datos = $this->mdlmodel->reportedepreciaciongestor();
        echo json_encode($datos);
    }

        public function reportet($fi,$ff)
    {
        $this->mdlmodel->__SET("fi", $fi);
        $this->mdlmodel->__SET("ff", $ff);
        $datos = $this->mdlmodel->reportet();
        echo json_encode($datos);
    }

            public function reportemantenimientotodo($fi,$ff)
    {
         $this->mdlmodel->__SET("fi", $fi);
        $this->mdlmodel->__SET("ff", $ff);
        $datos = $this->mdlmodel->reportemantenimientotodo();
        echo json_encode($datos);
    }

         public function reportematerialestodo($fi,$ff)
    {
        $this->mdlmodel->__SET("fi", $fi);
        $this->mdlmodel->__SET("ff", $ff);
        $datos = $this->mdlmodel->reportematerialestodo();
        echo json_encode($datos);
    }

           public function reporteasesoriastodo($fi,$ff)
    {
        $this->mdlmodel->__SET("fi", $fi);
        $this->mdlmodel->__SET("ff", $ff);
        $datos = $this->mdlmodel->reporteasesoriastodo();
        echo json_encode($datos);
    }

    public function reporteadmintodo($fi,$ff)
    {
      $this->mdlmodel->__SET("fi", $fi);
      $this->mdlmodel->__SET("ff", $ff);
      $datos = $this->mdlmodel->reporteadmintodo();
      echo json_encode($datos);
    }


          public function reportedepreciaciontodo($fi,$ff)
    {
        $this->mdlmodel->__SET("fi", $fi);
        $this->mdlmodel->__SET("ff", $ff);
        $datos = $this->mdlmodel->reportedepreciaciontodo();
        echo json_encode($datos);
    }



}



