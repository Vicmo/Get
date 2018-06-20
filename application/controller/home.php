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
      $resultado2 = $this->mdlmodel->logueo2();
      $resultado3 = $this->mdlmodel->logueo3();

      if ($resultado != false) {
        if ($resultado["clave"] == $contraseña) {
          if ($resultado["rol"] == 2) {
            session_start();
            $_SESSION["nombres"] = $resultado["nombres"];
            $_SESSION["apellidos"] = $resultado["apellidos"];
            $_SESSION["correo"] = $resultado["correo"];
            $_SESSION["rol"] = $resultado["rol"];
            $_SESSION["documento"] = $resultado["documento"];
            header("location: ".URL."inicio/gestor");
          }
        } 
      }else if ($resultado2 != false) {
        if ($resultado2["clave"] == $contraseña) {
        if ($resultado2["rol"] == 3) {
          session_start();
          $_SESSION["nombres"] = $resultado2["nombres"];
          $_SESSION["apellidos"] = $resultado2["apellidos"];
          $_SESSION["rol"] = $resultado2["rol"];
          $_SESSION["correo"] = $resultado2["correo"];
          $_SESSION["documento"] = $resultado2["documento"];
          header("location: ".URL."inicio/talento");
        }
      }
    }else if ($resultado3 != false) {
        if ($resultado3["clave"] == $contraseña) {
        if ($resultado3["rol"] == 1) {
          session_start();
          $_SESSION["rol"] = $resultado3["rol"];
          $_SESSION["correo"] = $resultado3 ["correo"];
          header("location: ".URL."inicio/administrador");
        }
        else if($resultado3["rol"] == 4) {
         session_start();
         $_SESSION["rol"] = $resultado3["rol"];
         $_SESSION["correo"] = $resultado3 ["correo"];
         header("location: ".URL."inicio/info");
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
    header('location: ' . URL . 'home');
  }


}
