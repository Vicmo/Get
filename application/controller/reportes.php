<?php

class reportes extends Controller
{

		private $mdlmodel = null;

  function __construct(){

     $this->mdlmodel = $this->loadModel("mdlreportes");
       $this->mdlgestor = $this->loadModel("mdlgestor");


  }

	public function index($idnodo)
	{

			$this->mdlgestor->__SET("idnodo", $idnodo);
	    $linea = $this->mdlgestor->lineasNodo();
	    $gestor = $this->mdlgestor->consultargestor();
			require APP . 'view/_templates/headeradmin.php';
			require APP . 'view/reportes/index.php';
			require APP . 'view/_footer/footerdinamizador.php';

    }


#################### Inicio método reportetalentos ############################

#------------- Método para ver los talentos por nodo (Gráfica) -------------#
    public function reportetalentos($ano,$idnodo)
    {
        $this->mdlmodel->__SET("ano", $ano);
        $this->mdlmodel->__SET("idnodo", $idnodo);
        $datos = $this->mdlmodel->reportetalentos();
        echo json_encode($datos);
    }

###################### Fin método reportetalentos ##############################

#################### Inicio método reportetalentoslinea ############################

#------------- Método para ver los talentos por nodo, línea y año (Gráfica) -------------#
    public function reportetalentoslinea($ano,$linea,$idnodo)
    {
        $this->mdlmodel->__SET("ano", $ano);
        $this->mdlmodel->__SET("linea", $linea);
        $this->mdlmodel->__SET("idnodo", $idnodo);
        $datos = $this->mdlmodel->reportetalentoslinea();
        echo json_encode($datos);
    }

###################### Fin método reportetalentoslinea ##############################



#################### Inicio método reportetalentosgestor ############################

#------------- Método para ver los talentos por nodo, gestor a cargo y año (Gráfica) -------------#

    public function reportetalentosgestor($ano,$gestor,$idnodo)
    {
        $this->mdlmodel->__SET("ano", $ano);
        $this->mdlmodel->__SET("gestor", $gestor);
        $this->mdlmodel->__SET("idnodo", $idnodo);
        $datos = $this->mdlmodel->reportetalentosgestor();
        echo json_encode($datos);
    }
###################### Fin método reportetalentosgestor ##############################


    	 public function reportemantenimientolinea($fi,$ff,$l,$idnodo)
    {
        $this->mdlmodel->__SET("fi", $fi);
        $this->mdlmodel->__SET("ff", $ff);
        $this->mdlmodel->__SET("l", $l);
        $this->mdlmodel->__SET("idnodo", $idnodo);
        $datos = $this->mdlmodel->reportemantenimientolinea();
        echo json_encode($datos);
    }


       public function reporteasesoriaslinea($fi,$ff,$l,$idnodo)
    {
        $this->mdlmodel->__SET("fi", $fi);
        $this->mdlmodel->__SET("ff", $ff);
        $this->mdlmodel->__SET("l", $l);
        $this->mdlmodel->__SET("idnodo", $idnodo);
        $datos = $this->mdlmodel->reporteasesoriaslinea();
        echo json_encode($datos);
    }

     public function reportematerialeslinea($fi,$ff,$l,$idnodo)
    {
        $this->mdlmodel->__SET("fi", $fi);
        $this->mdlmodel->__SET("ff", $ff);
        $this->mdlmodel->__SET("l", $l);
        $this->mdlmodel->__SET("idnodo", $idnodo);
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

          public function reporteadminlinea($fi,$ff,$l,$idnodo)
    {
        $this->mdlmodel->__SET("fi", $fi);
        $this->mdlmodel->__SET("ff", $ff);
        $this->mdlmodel->__SET("l", $l);
        $this->mdlmodel->__SET("idnodo", $idnodo);
        $datos = $this->mdlmodel->reporteadminlinea();
        echo json_encode($datos);
    }

          public function reportedepreciacionlinea($fi,$ff,$l,$idnodo)
    {
        $this->mdlmodel->__SET("fi", $fi);
        $this->mdlmodel->__SET("ff", $ff);
        $this->mdlmodel->__SET("l", $l);
        $this->mdlmodel->__SET("idnodo", $idnodo);
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

        public function reportet($fi,$ff,$idnodo)
    {
        $this->mdlmodel->__SET("fi", $fi);
        $this->mdlmodel->__SET("ff", $ff);
        $this->mdlmodel->__SET("idnodo", $idnodo);
        $datos = $this->mdlmodel->reportet();
        echo json_encode($datos);
    }

            public function reportemantenimientotodo($fi,$ff,$idnodo)
    {
         $this->mdlmodel->__SET("fi", $fi);
        $this->mdlmodel->__SET("ff", $ff);
        $this->mdlmodel->__SET("idnodo", $idnodo);
        $datos = $this->mdlmodel->reportemantenimientotodo();
        echo json_encode($datos);
    }

         public function reportematerialestodo($fi,$ff,$idnodo)
    {
        $this->mdlmodel->__SET("fi", $fi);
        $this->mdlmodel->__SET("ff", $ff);
        $this->mdlmodel->__SET("idnodo", $idnodo);
        $datos = $this->mdlmodel->reportematerialestodo();
        echo json_encode($datos);
    }

           public function reporteasesoriastodo($fi,$ff,$idnodo)
    {
        $this->mdlmodel->__SET("fi", $fi);
        $this->mdlmodel->__SET("ff", $ff);
        $this->mdlmodel->__SET("idnodo", $idnodo);
        $datos = $this->mdlmodel->reporteasesoriastodo();
        echo json_encode($datos);
    }

    public function reporteadmintodo($fi,$ff,$idnodo)
    {
      $this->mdlmodel->__SET("fi", $fi);
      $this->mdlmodel->__SET("ff", $ff);
      $this->mdlmodel->__SET("idnodo", $idnodo);
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
