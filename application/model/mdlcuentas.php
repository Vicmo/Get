<?php

class mdlcuentas
{
    private $rol;
    private $tipodocumento;
    private $documento;
    private $primernombre;
    private $segundonombre;
    private $primerapellido;
    private $segundoapellido;
    private $grupo;
    private $correo;
    private $clave;
    private $db;

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


 public function logueo(){
           $sql = "CALL login(?)";
           $stm = $this->db->prepare($sql);
           $stm->bindParam(1, $this->correo);
           $stm->execute();
           return $stm->fetch(PDO::FETCH_ASSOC);
         }

 public function consultac(){
           $sql = "CALL consultac(?)";
           $stm = $this->db->prepare($sql);
           $stm->bindParam(1, $this->correo);
           $stm->execute();
           return $stm->fetch(PDO::FETCH_ASSOC);
         }

  public function modificarclave(){

        $sql = "CALL modificarclave(?,?)";
        $stm = $this->db->prepare($sql);
        $stm->bindParam(1, $this->correo);
        $stm->bindParam(2, $this->clave);
        return $stm->execute();

        }

  public function registrarusuario(){

       $sql = "CALL registrarcuenta(?,?,?,?,?,?,?,?,?,?)";
       $stm = $this->db->prepare($sql);
       $stm->bindParam(1, $this->documento);
       $stm->bindParam(2, $this->nombres);
       $stm->bindParam(3, $this->apellidos);
       $stm->bindParam(4, $this->correo);
       $stm->bindParam(5, $this->estado);
       $stm->bindParam(6, $this->password);
       $stm->bindParam(7, $this->contacto);
       $stm->bindParam(8, $this->tipodoc);
       $stm->bindParam(9, $this->idnodo);
       $stm->bindParam(10, $this->rol);
       $stm->execute();

   }

    public function modificarcuenta(){

       $sql = "CALL modificarcuenta(?,?,?,?,?,?)";
       $stm = $this->db->prepare($sql);
       $stm->bindParam(1, $this->idpersona);
       $stm->bindParam(2, $this->documento);
       $stm->bindParam(3, $this->nombres);
       $stm->bindParam(4, $this->apellidos);
       $stm->bindParam(5, $this->correo);
       $stm->bindParam(6, $this->contacto);
       $stm->execute();
   }

}
