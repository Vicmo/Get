<?php


class cuentas extends Controller
{

    private $mdlmodel = null;

    function __construct(){

        $this->mdlmodel = $this->loadModel("mdlcuentas");

    }


    public function modificarclave()
    {
        $contraseñaE= md5($_POST["txtclaveactual"]);
        $this->mdlmodel->__SET("correo",$_POST["txtcorreo"]);
        $resultado = $this->mdlmodel->consultac();

            if ($resultado["password"] == $contraseñaE ){

                $this->mdlmodel->__SET("clave", $_POST["txtclavenueva"]);
                $this->mdlmodel->__SET("correo",$_POST["txtcorreo"]);
                $very= $this->mdlmodel->modificarclave();

                if ($resultado["rol"] == 1){
                    header('location: ' . URL . 'cuentas/cambiarclave');
                }else if($resultado["rol"] == 2){
                   header('location: ' . URL . 'cuentas/cambiarclave1');

               }else if($resultado["rol"] == 3){
                 header('location: ' . URL . 'cuentas/cambiarclave2');
             }
         }


 }

    public function cambiarclave(){

     require APP . 'view/_templates/headeradmin.php';
     require APP . 'view/cuentas/modificarclave.php';
    }

    public function cambiarclave1(){

     require APP . 'view/_templates/headergestor.php';
     require APP . 'view/cuentas/modificarclave.php';
    }

    public function cambiarclave2(){

     require APP . 'view/_templates/headertalento.php';
     require APP . 'view/cuentas/modificarclave.php';
    }

     public function cambio($correo)
    {

        $this->mdlmodel->__SET("correo", $correo);
        $datos = $this->mdlmodel->consultac();
        echo json_encode($datos);

    }

}
