<?php

class mdlidea 
{
 
   private $db;
   private $nombres;
   private $apellidos;
   private $correo;
   private $telefono;
   private $nombreproyecto;
   private $aprendizsena;
   private $pregunta1;
   private $pregunta2;
   private $pregunta3;
   private $descripcion;
   private $objetivo;
   private $alcance;
   private $fecha;

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

      public function registraridea()
   {

       $sql = "CALL registraridea(?,?,?,?,?,?,?,?,?,?,?,?,?)";
       $stm = $this->db->prepare($sql);
       $stm->bindParam(1, $this->nombres);
       $stm->bindParam(2, $this->apellidos);
       $stm->bindParam(3, $this->correo);
       $stm->bindParam(4, $this->telefono);
       $stm->bindParam(5, $this->nombreproyecto);
       $stm->bindParam(6, $this->aprendizsena);
       $stm->bindParam(7, $this->pregunta1);
       $stm->bindParam(8, $this->pregunta2);
       $stm->bindParam(9, $this->pregunta3);
      $stm->bindParam(10, $this->descripcion);
      $stm->bindParam(11, $this->objetivo);
      $stm->bindParam(12, $this->alcance);
      $stm->bindParam(13, $this->fecha);
       $stm->execute();

        
}
 public function veric()
   {
       $sql = "CALL consultacorreoi(?)";
       $stm = $this->db->prepare($sql);
       $stm->bindParam(1, $this->correo);
       $stm->execute();
       return $stm->fetch(PDO::FETCH_ASSOC);

   }

      public function consultaidea()
    {
        $sql = "CALL consultaidea";
        $stm = $this->db->prepare($sql);
    
        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_ASSOC);

    }

 public function veridea()
   {
       $sql = "CALL veridea(?)";
       $stm = $this->db->prepare($sql);
       $stm->bindParam(1, $this->id);
       $stm->execute();
       return $stm->fetch(PDO::FETCH_ASSOC);

   }
}
       