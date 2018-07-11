<?php

class usuario extends Controller
{

	private $mdlmodel = null;
	private $mdltipodocumento = null;
	private $mdlusuario = null;

  function __construct(){
  	$this->mdltipodocumento = $this->loadModel("mdltipodocumento");
  	$this->mdlnodo = $this->loadModel("mdlnodo");
  	$this->mdlusuario = $this->loadModel("mdlusuario");
  }

  public function index()
  {
  	$nodos = $this->mdlnodo->consultarnodos();
    $tipodocumento = $this->mdltipodocumento->queryTipoDocumento();
    require APP . 'view/_templates/headeradminodos.php';
    require APP . 'view/usuario/dinamizador/index.php';
		require APP . 'view/_footer/footeradminnodos.php';

  }

  public function indexadmin()
  {

    $nodos = $this->mdlnodo->consultarnodos();
		require APP . 'view/_templates/headeradminodos.php';
		require APP . 'view/usuario/administrador/index.php';
		require APP . 'view/_footer/footeradminnodos.php';

  }

  public function registrar(){

                   $this->mdlusuario->__SET("rol", $_POST["txtrol"]);
                   $this->mdlusuario->__SET("nodo", $_POST["txtnodo"]);
                   $this->mdlusuario->__SET("tipodocumento", $_POST["txttipodocumento"]);
                   $this->mdlusuario->__SET("documento", $_POST["txtdocumento"]);
                   $this->mdlusuario->__SET("nombres",ucwords ($_POST["txtnombres"]) );
                   $this->mdlusuario->__SET("apellidos", ucwords ($_POST["txtapellidos"]));
                   $this->mdlusuario->__SET("correo", $_POST["txtcorreo"]);
                   $this->mdlusuario->__SET("estado", $_POST["txtestado"]);
                   $this->mdlusuario->__SET("password", MD5($_POST["txtdocumento"]));
                   $this->mdlusuario->__SET("contacto", $_POST["txtcontacto"]);
                   $very= $this->mdlusuario->RegistrarDinamizador();
                   if ($very == true) {

                    header('location: ' . URL . 'usuario/index/');

                   }else{
                    echo "fallo";
                   }
    // if (isset($_POST["txtrol"]) && isset($_POST["txtnodo"]) && isset($_POST["txttipodocumento"]) && !empty($_POST["txtdocumento"]) && isset($_POST["txtnombres"]) &&
    //    isset($_POST["txtapellidos"]) && isset($_POST["txtcorreo"]) && isset($_POST["txtestado"]) ) {
    //     if (preg_match("/^([0-9]){10,10}$/", $_POST["txtdocumento"])
    //         && preg_match("/^([a-z A-Z]){1,45}$/", $_POST["txtnombres"])
    //         && preg_match("/^([a-z A-Z]){1,45}$/", $_POST["txtapellidos"])
    //         && preg_match("/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/", $_POST["txtcorreo"])&& preg_match("/^([0-9]){1,10}$/", $_POST["txtcontacto"])) {

    //           }
    //     }
  }


  public function ValidarCorreoAjax()
  {
    $this->mdlusuario->__SET("correo", $_POST["validarCorreo"]);
    // $respuesta =  $_POST["validarCorreo"];
     // $respuesta= mdlusuario::validarCorreoModel()
    $respuesta = $this->mdlusuario->ValidarCorreoAjax();
    if (count($respuesta["correo"]) > 0 && isset($_POST["validarCorreo"])) {
      echo 0;
    }else{
      echo 1;
    }

    // echo '$_POST["validarCorreo"]';
  }

  public function ValidarDocumentoAjax()
  {
    $this->mdlusuario->__SET("documento", $_POST["validarDocumento"]);
    $this->mdlusuario->__SET("idpersona", $_POST["idpersona"]);
    $respuesta = $this->mdlusuario->ValidarDocumentoAjax();
    if (count($respuesta["documento"]) > 0 && isset($_POST["validarDocumento"])) {
      echo 0;
    }else{
      echo 1;
    }
  }
  public function DinamizadorPorNodo($nodo)
  {
    $this->mdlusuario->__SET("nodo", $nodo);
    $datos = $this->mdlusuario->QueryDinamizadorPorNodo();
    echo json_encode($datos);
  }

  /*============================================================================
  =            consulta gestores por rol para mostrar en datatables            =
  ============================================================================*/
   public function GestoresPorNodo($nodo)
   {
     $this->mdlusuario->__SET("nodo", $nodo);
     $datos = $this->mdlusuario->QueryGestorPorNodo();
     echo json_encode($datos);
   }


  /*=====  End of consulta gestores por rol para mostrar en datatables  ======*/

  /*==============================================================================================
  =            consulta talentos por nodo para mostrar en el datatables administrador            =
  ==============================================================================================*/
  public function TaletosPorNodo($nodo)
  {
    $this->mdlusuario->__SET("nodo", $nodo);
     $datos = $this->mdlusuario->QueryTalentoPorNodo();
     echo json_encode($datos);
  }


  /*=====  End of consulta talentos por nodo para mostrar en el datatables administrador  ======*/

  /*====================================================================
  =            metodo para consultar los gestores por nodo (combo dependiente)            =
  ====================================================================*/

  public function getGestor($nodo)
  {
    $this->mdlusuario->__SET("nodo", $nodo);
    $datos = $this->mdlusuario->QueryGestorPorNodo();
    echo json_encode($datos);
  }

  /*=====  End of metodo para consultar los gestores por nodo (combo dependiente)  ======*/

  /*=================================================================
  =            metodo para consultar talentos por gestor            =
  =================================================================*/

  public function TalentosPorGestor($gestor)
  {
    $this->mdlusuario->__SET("idpersona", $gestor);
    $datos = $this->mdlusuario->QueryTalentosPorGestor();
    echo json_encode($datos);
  }

  /*=====  End of metodo para consultar talentos por gestor  ======*/

  /*=========================================================================
  =            metodo para mostrar en el modal talentos por nodo            =
  =========================================================================*/
  public function modalTalentoPorNodo($idpersona)
  {
    $this->mdlusuario->__SET("idpersona", $idpersona);
    $datos = $this->mdlusuario->QuerymodalTalentoPorNodo();
    echo json_encode($datos);
  }


  /*=====  End of metodo para mostrar en el modal talentos por nodo  ======*/






  public function edit($idpersona)
  {
    $this->mdlusuario->__SET("idpersona", $idpersona);
    $dinamizador = $this->mdlusuario->QueryVerDinamizaddor();
    $nodos = $this->mdlnodo->consultarnodos();
    $tipodocumento = $this->mdltipodocumento->queryTipoDocumento();
    require APP . 'view/_templates/headeradminodos.php';
    require APP . 'view/usuario/dinamizador/edit.php';
		require APP . 'view/_footer/footeradminnodos.php';

  }

  public function Update()
  {
    $this->mdlusuario->__SET("idpersona", $_POST["txtidpersona"]);
    $this->mdlusuario->__SET("rol", $_POST["txtrol"]);
    $this->mdlusuario->__SET("nodo", $_POST["txtnodo"]);
    $this->mdlusuario->__SET("tipodocumento", $_POST["txttipodocumento"]);
    $this->mdlusuario->__SET("documento", $_POST["txtdocumento"]);
    $this->mdlusuario->__SET("nombres",ucwords ($_POST["txtnombres"]) );
    $this->mdlusuario->__SET("apellidos", ucwords ($_POST["txtapellidos"]));
    $this->mdlusuario->__SET("correo", $_POST["txtcorreo"]);
    $this->mdlusuario->__SET("estado", $_POST["txtestado"]);
    $this->mdlusuario->__SET("password", MD5($_POST["txtdocumento"]));
    $this->mdlusuario->__SET("contacto", $_POST["txtcontacto"]);
		// var_dump($_POST["txtdocumento"]);
		// exit;
    $very= $this->mdlusuario->ActualizarDinamizador();
    if ($very == true) {

      header('location: ' . URL . 'usuario/index/');

    }else{
       echo "Falló";
    }
  }
}
