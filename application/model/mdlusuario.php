<?php

class mdlusuario
{

    private $db;
    private $rol;
    private $nodo;
    private $tipodocumento;
    private $documento;
    private $nombres;
    private $apellidos;
    private $correo;
    private $estado;
    private $password;
    private $contacto;


    public function __SET($attr, $val){

            $this->$attr = $val;
        }

        public function __GET($attr){
            return $this->$attr;
        }

    function __construct($db)
    {
        try {
            $this->db = $db;
        } catch (PDOException $e) {
            exit('Database connection could not be established.');
        }
    }

    public function RegistrarDinamizador()
    {
        // $llego = array('0' => $this->rol,
        //                         '1' => $this->nodo,
        //                         '2' => $this->tipodocumento,
        //                         '3' => $this->documento,
        //                         '4' => $this->nombres,
        //                         '5' => $this->apellidos,
        //                         '6' => $this->correo,
        //                         '7' => $this->estado,
        //                         '8' => $this->password,
        //                         '9' => $this->contacto);

        // var_dump($llego);
       $sql = "CALL registrardinamizador(?,?,?,?,?,?,?,?,?,?)";
       $stm = $this->db->prepare($sql);
       $stm->bindParam(1, $this->rol);
       $stm->bindParam(2, $this->nodo);
       $stm->bindParam(3, $this->tipodocumento);
       $stm->bindParam(4, $this->documento);
       $stm->bindParam(5, $this->nombres);
       $stm->bindParam(6, $this->apellidos);
       $stm->bindParam(7, $this->correo);
       $stm->bindParam(8, $this->estado);
       $stm->bindParam(9, $this->password);
       $stm->bindParam(10, $this->contacto);
       $stm->execute();

       return $stm;
    }

    /*==============================================
    =            validacion correo ajax            =
    ==============================================*/

    public function ValidarCorreoAjax()
    {
        $sql = "SELECT correo FROM persona WHERE correo = ?";
        $stm = $this->db->prepare($sql);
        $stm->bindParam(1, $this->correo);
        $stm->execute();
        return $stm->fetch(PDO::FETCH_ASSOC);
    }

    /*=====  End of validacion correo ajax  ======*/

    /*=================================================
    =            validacion documento ajax            =
    =================================================*/

    public function ValidarDocumentoAjax()
    {
        $sql = "SELECT documento FROM persona WHERE documento = ?";
        $stm = $this->db->prepare($sql);
        $stm->bindParam(1, $this->documento);
        $stm->execute();
        return $stm->fetch(PDO::FETCH_ASSOC);
    }

    /*=====  End of validacion documento ajax  ======*/




}
