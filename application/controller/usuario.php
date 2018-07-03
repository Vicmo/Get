<?php

class usuario extends Controller
{

	private $mdlmodel = null;


  function __construct(){
  	$this->mdltipodocumento = $this->loadModel("mdltipodocumento");
  	$this->mdlnodo = $this->loadModel("mdlnodo");
  	$this->mdlusuario = $this->loadModel("mdlusuario");
  }

  public function index($nodo ='1')
  {
  	$this->mdlnodo->__SET("idnodo", $nodo);
  	$nodos = $this->mdlnodo->nodos();
  	$dinamizadorpornodo = $this->mdlnodo->dinamizadorpornodo();
    $tipodocumento = $this->mdltipodocumento->queryTipoDocumento();
  	 if ($nodo == $nodos["idnodo"]) {
       require APP . 'view/_templates/headeradminodos.php';
       require APP . 'view/dinamizador/index.php';
    }else{
      header('location: ' . URL . 'problem/index');
    }

  }

  public function registrar($nodo ='1'){

    if (isset($_POST["txtrol"]) && isset($_POST["txtnodo"]) && isset($_POST["txttipodocumento"]) && !empty($_POST["txtdocumento"]) && isset($_POST["txtnombres"]) &&
       isset($_POST["txtapellidos"]) && isset($_POST["txtcorreo"]) && isset($_POST["txtestado"]) ) {
        if (preg_match("/^([0-9]){10,10}$/", $_POST["txtdocumento"])
            && preg_match("/^([a-z A-Z]){1,45}$/", $_POST["txtnombres"])
            && preg_match("/^([a-z A-Z]){1,45}$/", $_POST["txtapellidos"])
            && preg_match("/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/", $_POST["txtcorreo"])&& preg_match("/^([0-9]){1,10}$/", $_POST["txtcontacto"])) {

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

                      echo '';
                    header('location: ' . URL . 'dinamizador/index/'.$nodo);

                   }else{
                       echo "<script>alert();</script>";
                   }

              }else{
                echo "<script>alert('error');</script>";
              }
        }else{
          echo "<script>alert('error');</script>";
    }
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
    $respuesta = $this->mdlusuario->ValidarDocumentoAjax();
    if (count($respuesta["documento"]) > 0 && isset($_POST["validarDocumento"])) {
      echo 0;
    }else{
      echo 1;
    }
  }
}
