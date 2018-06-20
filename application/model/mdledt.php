<?php

class mdledt
{
 
   private $db;
   private $idedt;
   private $fecha;
   private $nombre;
   private $empresa;
   private $contacto;
   private $correo;
   private $telefono;
   private $gestor;
   private $observaciones;
   private $empleados;
   private $instructores;
   private $aprendices;
   private $publico;
  

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
   
      public function registrar()
   {

       $sql = "CALL registraredt(?,?,?,?,?,?,?,?,?,?,?,?)";
       $stm = $this->db->prepare($sql);
       $stm->bindParam(1, $this->fecha);
       $stm->bindParam(2, $this->nombre);
       $stm->bindParam(3, $this->empresa);
       $stm->bindParam(4, $this->contacto);
       $stm->bindParam(5, $this->correo);
       $stm->bindParam(6, $this->telefono);
       $stm->bindParam(7, $this->gestor);
       $stm->bindParam(8, $this->observaciones);
       $stm->bindParam(9, $this->empleados);
       $stm->bindParam(10, $this->instructores);
       $stm->bindParam(11, $this->aprendices);
       $stm->bindParam(12, $this->publico);
       $stm->execute();

   }

      public function consulta()
      {
          $sql = "CALL consultaedt(?)";
          $stm = $this->db->prepare($sql);
          $stm->bindParam(1, $this->gestor);
          $stm->execute();
          return $stm->fetchAll(PDO::FETCH_ASSOC);

      }

      
      public function veredt()
      {
          $sql = "CALL veredt(?)";
          $stm = $this->db->prepare($sql);
          $stm->bindParam(1, $this->id);
          $stm->execute();
          return $stm->fetch(PDO::FETCH_ASSOC);

      }

        public function uno()
      {
       $sql = "CALL veredt(?)";
       $stm = $this->db->prepare($sql);
       $stm->bindParam(1, $this->idedt);
       $stm->execute();
       return $stm->fetch(PDO::FETCH_ASSOC);

   }
      public function modificar()
   {

       $sql = "CALL modificaredt(?,?,?,?,?,?,?,?,?,?,?,?,?)";
       $stm = $this->db->prepare($sql);
       
       $stm->bindParam(1, $this->fecha);
       $stm->bindParam(2, $this->nombre);
       $stm->bindParam(3, $this->empresa);
       $stm->bindParam(4, $this->contacto);
       $stm->bindParam(5, $this->correo);
       $stm->bindParam(6, $this->telefono); 
       $stm->bindParam(7, $this->gestor);
       $stm->bindParam(8, $this->observaciones);
       $stm->bindParam(9, $this->empleados);
       $stm->bindParam(10, $this->instructores);
       $stm->bindParam(11, $this->aprendices);
       $stm->bindParam(12, $this->publico);
       $stm->bindParam(13, $this->idedt);
      return $stm->execute();

 }


 }

  