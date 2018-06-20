<?php

class indicadores extends Controller
{

		private $mdlmodel = null;

  function __construct(){

     $this->mdlmodel = $this->loadModel("mdlindicadores");
       $this->mdlgestor = $this->loadModel("mdlgestor");


  }

	public function index()
	{
         $linea = $this->mdlgestor->consultalineaa();
           $gestor = $this->mdlgestor->consultargestor();
		require APP . 'view/_templates/headeradmin.php';
		require APP . 'view/indicadores/index.php';

    }


       public function reporteempresa($ano)
    {
        $this->mdlmodel->__SET("ano", $ano);
        $datos = $this->mdlmodel->reporteempresa();
        echo json_encode($datos);
    }

        public function reportedt($ano)
    {
        $this->mdlmodel->__SET("ano", $ano);
        $datos = $this->mdlmodel->reportedt();
        echo json_encode($datos);
    }

         public function reportedtlinea($ano,$linea)
    {
        $this->mdlmodel->__SET("ano", $ano);
        $this->mdlmodel->__SET("linea", $linea);
        $datos = $this->mdlmodel->reportedtlinea();
        echo json_encode($datos);
    }

          public function reportedtgestor($ano,$gestor)
    {
        $this->mdlmodel->__SET("ano", $ano);
        $this->mdlmodel->__SET("gestor", $gestor);
        $datos = $this->mdlmodel->reportedtgestor();
        echo json_encode($datos);
    }

         public function reportegrupos($ano)
    {
        $this->mdlmodel->__SET("ano", $ano);
        $datos = $this->mdlmodel->reportegrupos();
        echo json_encode($datos);
    }


    public function proyectosinscritos($ano)
    {
        $this->mdlmodel->__SET("ano", $ano);
        $datos = $this->mdlmodel->proyectosinscritos();
        echo json_encode($datos);
    }

    public function arteins($ano)
    {
        $this->mdlmodel->__SET("ano", $ano);
        $datos = $this->mdlmodel->arteins();
        echo json_encode($datos);
    }

    public function artempeje()
    {
        $datos = $this->mdlmodel->artempeje();
        echo json_encode($datos);
    }

    public function artempfin($ano)
    {
			$this->mdlmodel->__SET("ano", $ano);
        $datos = $this->mdlmodel->artempfin();
        echo json_encode($datos);
    }

    public function prototipofinalizado($ano)
    {
        $this->mdlmodel->__SET("ano", $ano);
        $datos = $this->mdlmodel->prototipofinalizado();
        echo json_encode($datos);
    }

    public function prototipomercado($ano)
    {
        $this->mdlmodel->__SET("ano", $ano);
        $datos = $this->mdlmodel->prototipomercado();
        echo json_encode($datos);
    }

          public function reportegruposlinea($ano,$linea)
    {
        $this->mdlmodel->__SET("ano", $ano);
        $this->mdlmodel->__SET("linea", $linea);
        $datos = $this->mdlmodel->reportegruposlinea();
        echo json_encode($datos);
    }

          public function reportegruposgestor($ano,$gestor)
    {
        $this->mdlmodel->__SET("ano", $ano);
        $this->mdlmodel->__SET("gestor", $gestor);
        $datos = $this->mdlmodel->reportegruposgestor();
        echo json_encode($datos);
    }

         public function indicadorestipoproyecto()
    {
        $datos = $this->mdlmodel->indicadorestipoproyecto();
        echo json_encode($datos);
    }

       public function indicadoresestadoproyecto($ano)
    {
         $this->mdlmodel->__SET("ano", $ano);
        $datos = $this->mdlmodel->indicadoresestadoproyecto();
        echo json_encode($datos);
    }

       public function reportelineaestado($linea,$ano)
    {
        $this->mdlmodel->__SET("linea", $linea);
        $this->mdlmodel->__SET("ano", $ano);
        $datos = $this->mdlmodel->reportelineaestado();
        echo json_encode($datos);
    }

       public function reporteempresalinea($linea,$ano)
    {
        $this->mdlmodel->__SET("linea", $linea);
        $this->mdlmodel->__SET("ano", $ano);
        $datos = $this->mdlmodel->reporteempresalinea();
        echo json_encode($datos);
    }

        public function reporteempresagestor($gestor,$ano)
    {
        $this->mdlmodel->__SET("gestor", $gestor);
        $this->mdlmodel->__SET("ano", $ano);
        $datos = $this->mdlmodel->reporteempresagestor();
        echo json_encode($datos);
    }

         public function indicadoreslinea($linea)
    {
        $this->mdlmodel->__SET("linea", $linea);
        $datos = $this->mdlmodel->indicadoreslinea();
        echo json_encode($datos);
    }

        public function indicadoresgestor($gestor,$ano)
    {
        $this->mdlmodel->__SET("gestor", $gestor);
        $this->mdlmodel->__SET("ano", $ano);
        $datos = $this->mdlmodel->indicadoresgestor();
        echo json_encode($datos);
    }

}
