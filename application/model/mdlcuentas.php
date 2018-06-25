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

  public function registrarcuenta(){

       $sql = "CALL registrarcuenta(?,?,?)";
       $stm = $this->db->prepare($sql);
       $stm->bindParam(1, $this->rol);
       $stm->bindParam(2, $this->correo);
       $stm->bindParam(3, $this->clave);
       $stm->execute();

   }

    public function modificarcuenta(){

       $sql = "CALL modificarcuenta(?,?)";
       $stm = $this->db->prepare($sql);
       $stm->bindParam(1, $this->id);
       $stm->bindParam(2, $this->correo);
       $stm->execute();
   }

}
