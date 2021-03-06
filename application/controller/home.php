<?php

class home extends Controller
{

	private $mdlmodel = null;

  function __construct(){
    $this->mdlmodel = $this->loadModel("mdlcuentas");
  }

  public function index(){
    require APP . 'view/home/index.php';
  }




  public function logueo(){

    header('location: ' . URL . 'home/index/#e');

    if (isset($_POST["btnlogin"])) {

      $correo = $_POST["txtcorreo"];
      $contraseña= md5($_POST["txtclave"]);
      $this->mdlmodel->__SET("correo", $correo);
      $resultado = $this->mdlmodel->logueo();
      if ($resultado != false) {
        if ($resultado["password"] == $contraseña) {
          if ($resultado["rol"] == 'Gestor' && $resultado["estado"] == 1) {

            session_start();
            $_SESSION["nombres"] = $resultado["nombres"];
            $_SESSION["apellidos"] = $resultado["apellidos"];
						$_SESSION["idnodo"] = $resultado["idnodo"];
						$_SESSION["nodo"] = $resultado["nodo"];
            $_SESSION["correo"] = $resultado["correo"];
            $_SESSION["rol"] = $resultado["rol"];
            $_SESSION["persona"] = $resultado["idpersona"];
            header("location: ".URL."inicio/gestor");

          } else if ($resultado["rol"] == 'Talento' && $resultado["estado"] == 1) {

						session_start();
						$_SESSION["nombres"] = $resultado["nombres"];
						$_SESSION["apellidos"] = $resultado["apellidos"];
						$_SESSION["idnodo"] = $resultado["idnodo"];
						$_SESSION["nodo"] = $resultado["nodo"];
						$_SESSION["rol"] = $resultado["rol"];
						$_SESSION["correo"] = $resultado["correo"];
						$_SESSION["documento"] = $resultado["documento"];
						header("location: ".URL."inicio/talento");

					} else if ($resultado["rol"] == 'Dinamizador' && $resultado["estado"] == 1) {

						session_start();
						$_SESSION["nombres"] = $resultado["nombres"];
						$_SESSION["apellidos"] = $resultado["apellidos"];
						$_SESSION["documento"] = $resultado["documento"];
						$_SESSION["nodo"] = $resultado["nodo"];
						$_SESSION["idnodo"] = $resultado["idnodo"];
						$_SESSION["rol"] = $resultado["rol"];
						$_SESSION["correo"] = $resultado["correo"];
						header("location: ".URL."inicio/admin");

					} else if ($resultado["rol"] == 'Infocenter' && $resultado["estado"] == 1) {

						session_start();
						$_SESSION["nombres"] = $resultado["nombres"];
						$_SESSION["apellidos"] = $resultado["apellidos"];
						$_SESSION["documento"] = $resultado["documento"];
						$_SESSION["idnodo"] = $resultado["idnodo"];
						$_SESSION["nodo"] = $resultado["nodo"];
						$_SESSION["rol"] = $resultado["rol"];
						$_SESSION["correo"] = $resultado["correo"];
						header("location: ".URL."inicio/info");

					} else if ($resultado["rol"] == 'Administrador' && $resultado["estado"] == 1) {

						session_start();
						$_SESSION["nombres"] = $resultado["nombres"];
						$_SESSION["apellidos"] = $resultado["apellidos"];
						$_SESSION["documento"] = $resultado["documento"];
						$_SESSION["idnodo"] = $resultado["idnodo"];
						$_SESSION["nodo"] = $resultado["nodo"];
						$_SESSION["rol"] = $resultado["rol"];
						$_SESSION["correo"] = $resultado["correo"];
						header("location: ".URL."inicio/adminodos");

					}
        }
      }
    }
  }




  public function salir(){
    session_start();
    unset($_SESSION["nombres"]);
    unset($_SESSION["apellidos"]);
    unset($_SESSION["rol"]);
    unset($_SESSION["correo"]);
    unset($_SESSION["idnodo"]);
    unset($_SESSION["nodo"]);
    header('location: ' . URL . 'home');
  }


}
