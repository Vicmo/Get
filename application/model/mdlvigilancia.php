<?php

class mdlvigilancia
{

   private $db;
   private $idvigilancia;
   private $fechainicio;
   private $fechafin;
   private $horas;
   private $nombre;
   private $empresa;
   private $contacto;
   private $correo;
   private $telefono;
   private $gestor;
   private $observaciones;



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
     echo "string";

       $sql = "CALL registrarvigilancia(?,?,?,?,?,?,?,?)";
       $stm = $this->db->prepare($sql);
       $stm->bindParam(1, $this->fechainicio);
       $stm->bindParam(2, $this->nombre);
       $stm->bindParam(3, $this->empresa);
       $stm->bindParam(4, $this->contacto);
       $stm->bindParam(5, $this->correo);
       $stm->bindParam(6, $this->telefono);
       $stm->bindParam(7, $this->observaciones);
       $stm->bindParam(8, $this->gestor);
       $stm->execute();

   }

      public function consulta()
      {
          $sql = "CALL consultavigilancia(?)";
          $stm = $this->db->prepare($sql);
          $stm->bindParam(1, $this->gestor);
          $stm->execute();
          return $stm->fetchAll(PDO::FETCH_ASSOC);

      }


     public function uno()
      {
       $sql = "CALL vervigilancia(?)";
       $stm = $this->db->prepare($sql);
       $stm->bindParam(1, $this->idvigilancia);
       $stm->execute();
       return $stm->fetch(PDO::FETCH_ASSOC);

   }
         public function modificar()
   {

       $sql = "CALL modificarvigilancia(?,?,?,?,?,?,?,?,?,?,?)";
       $stm = $this->db->prepare($sql);
       $stm->bindParam(1, $this->fechainicio);
       $stm->bindParam(2, $this->nombre);
       $stm->bindParam(3, $this->empresa);
       $stm->bindParam(4, $this->contacto);
       $stm->bindParam(5, $this->correo);
       $stm->bindParam(6, $this->telefono);
       $stm->bindParam(7, $this->observaciones);
       $stm->bindParam(8, $this->gestor);
       $stm->bindParam(9, $this->fechafin);
       $stm->bindParam(10, $this->horas);
       $stm->bindParam(11, $this->idvigilancia);
       return $stm->execute();

   }

 }
