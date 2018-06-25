<?php

class home extends Controller
{

	private $mdlmodel = null;

  function __construct(){
    $this->mdlmodel = $this->loadModel("mdlcuentas");
  }

  public function index()
  {
    require APP . 'view/home/index.php';
  }




  public function logueo()
  {

    header('location: ' . URL . 'home/index/#e');

    if (isset($_POST["btnlogin"])) {

      $correo = $_POST["txtcorreo"];
      $contraseña= md5($_POST["txtclave"]);
      $this->mdlmodel->__SET("correo", $correo);
      $resultado = $this->mdlmodel->logueo();
      // $resultado2 = $this->mdlmodel->logueo2();
      // $resultado3 = $this->mdlmodel->logueo3();

      if ($resultado != false) {
        if ($resultado["password"] == $contraseña) {
          if ($resultado["rol"] == 'Gestor') {

            session_start();
            $_SESSION["nombres"] = $resultado["nombres"];
            $_SESSION["apellidos"] = $resultado["apellidos"];
						$_SESSION["idnodo"] = $resultado["idnodo"];
						$_SESSION["nodo"] = $resultado["nodo"];
            $_SESSION["correo"] = $resultado["correo"];
            $_SESSION["rol"] = $resultado["rol"];
            $_SESSION["documento"] = $resultado["documento"];
            header("location: ".URL."inicio/gestor");

          } else if ($resultado["rol"] == 'Talento') {

						session_start();
						$_SESSION["nombres"] = $resultado["nombres"];
						$_SESSION["apellidos"] = $resultado["apellidos"];
						$_SESSION["idnodo"] = $resultado["idnodo"];
						$_SESSION["nodo"] = $resultado["nodo"];
						$_SESSION["rol"] = $resultado["rol"];
						$_SESSION["correo"] = $resultado["correo"];
						$_SESSION["documento"] = $resultado["documento"];
						header("location: ".URL."inicio/talento");

					} else if ($resultado["rol"] == 'Dinamizador') {

						session_start();
						$_SESSION["nombres"] = $resultado["nombres"];
						$_SESSION["apellidos"] = $resultado["apellidos"];
						$_SESSION["documento"] = $resultado["documento"];
						$_SESSION["nodo"] = $resultado["nodo"];
						$_SESSION["idnodo"] = $resultado["idnodo"];
						$_SESSION["rol"] = $resultado["rol"];
						$_SESSION["correo"] = $resultado["correo"];
						header("location: ".URL."inicio/administrador");

					} else if ($resultado["rol"] == 'Infocenter'){

						session_start();
						$_SESSION["nombres"] = $resultado["nombres"];
						$_SESSION["apellidos"] = $resultado["apellidos"];
						$_SESSION["documento"] = $resultado["documento"];
						$_SESSION["idnodo"] = $resultado["idnodo"];
						$_SESSION["nodo"] = $resultado["nodo"];
						$_SESSION["rol"] = $resultado["rol"];
						$_SESSION["correo"] = $resultado["correo"];
						header("location: ".URL."inicio/info");

					} else if ($resultado["rol"] == 'Administrador'){
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
					// header("location: ".URL."inicio/i");

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
    header('location: ' . URL . 'home');
  }


}
