<?php

class mdlusuario
{

    private $db;
    private $idpersona;
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
       $sql = "CALL registrarusuario(?,?,?,?,?,?,?,?,?,?)";
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
        $sql = "SELECT documento FROM persona WHERE documento = ? and idpersona = ?";
        $stm = $this->db->prepare($sql);
        $stm->bindParam(1, $this->documento);
        $stm->bindParam(2, $this->idpersona);
        $stm->execute();
        return $stm->fetch(PDO::FETCH_ASSOC);
    }

    /*=====  End of validacion documento ajax  ======*/

    /*===========================================================================
    =            consulta para mostrar e tabla dinamizadores por rol            =
    ===========================================================================*/

    public function QueryDinamizadorPorNodo()
    {
        $sql = "CALL dinamizadorpornodo(?)";
        $stm = $this->db->prepare($sql);
        $stm->bindParam(1, $this->nodo);
        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_ASSOC);
    }

    /*=====  End of consulta para mostrar e tabla dinamizadores por rol  ======*/

    /*================================================================================
    =            consulta para mostrar gestores por nodo en la datatables            =
    ================================================================================*/

    public function QueryGestorPorNodo()
    {
      $sql = "CALL consultargestor(?)";
        $stm = $this->db->prepare($sql);
        $stm->bindParam(1, $this->nodo);
        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_ASSOC);
    }

    /*=====  End of consulta para mostrar gestores por nodo en la datatables  ======*/
    /*================================================================================
    =            consulta para mostrar talentos por nodo en la datatables            =
    ================================================================================*/

    public function QueryTalentoPorNodo()
    {
        $sql = "CALL ConsultarTalentosPorNodo(?)";
        $stm = $this->db->prepare($sql);
        $stm->bindParam(1, $this->nodo);
        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_ASSOC);
    }

    /*=====  End of consulta para mostrar talentos por nodo en la datatables  ======*/

    /*=================================================================
    =            consulta para mostrar talentos por gestor            =
    =================================================================*/

    public function QueryTalentosPorGestor()
    {
        $sql = "CALL ConsultarTalentosPorGestor(?)";
        $stm = $this->db->prepare($sql);
        $stm->bindParam(1, $this->idpersona);
        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_ASSOC);
    }


    /*=====  End of consulta para mostrar talentos por gestor  ======*/

    /*===========================================================================
    =            consulta para mostrar en el modal talentos por nodo            =
    ===========================================================================*/
    public function QuerymodalTalentoPorNodo()
    {
        $sql = "CALL VerModalTalentoPorNodo(?)";
        $stm = $this->db->prepare($sql);
        $stm->bindParam(1, $this->idpersona);
        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_ASSOC);
    }


    /*=====  End of consulta para mostrar en el modal talentos por nodo  ======*/





   public function QueryVerDinamizaddor(){
           $sql = "CALL verDinamizador(?)";
           $stm = $this->db->prepare($sql);
           $stm->bindParam(1, $this->idpersona);
           $stm->execute();
           return $stm->fetch(PDO::FETCH_ASSOC);
    }
    public function ActualizarDinamizador()
    {
        $sql = "CALL actualizarusuario(?,?,?,?,?,?,?,?,?,?)";
       $stm = $this->db->prepare($sql);
       $stm->bindParam(1, $this->idpersona);
       $stm->bindParam(2, $this->rol);
       $stm->bindParam(3, $this->nodo);
       $stm->bindParam(4, $this->tipodocumento);
       $stm->bindParam(5, $this->documento);
       $stm->bindParam(6, $this->nombres);
       $stm->bindParam(7, $this->apellidos);
       $stm->bindParam(8, $this->correo);
       $stm->bindParam(9, $this->estado);
       $stm->bindParam(10, $this->contacto);
       $stm->execute();

       return $stm;

    }

}
