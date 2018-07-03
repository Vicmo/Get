
<?php

class mdlnodo
{

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


       public function consultarnodos()
       {
           $sql = "CALL consultarnodos";
           $stm = $this->db->prepare($sql);
           $stm->execute();
           return $stm->fetchAll(PDO::FETCH_ASSOC);
         }

         public function registrar(){
           $sql = "CALL registronodo(?,?,?)";
           $stm = $this->db->prepare($sql);
           $stm->bindParam(1, $this->ciudad);
           $stm->bindParam(2, $this->nombre);
           $stm->bindParam(3, $this->direccion);
           $stm->execute();
         }

         public function vernodo(){
           $sql = "CALL vernodo(?)";
           $stm = $this->db->prepare($sql);
           $stm->bindParam(1, $this->idnodo);
           $stm->execute();
           return $stm->fetch(PDO::FETCH_ASSOC);
         }

         public function consultadepto(){
           $sql = "CALL consultadepto";
           $stm = $this->db->prepare($sql);
           $stm->execute();
           return $stm->fetchAll(PDO::FETCH_ASSOC);
         }

         public function modificarnodo(){
           $sql = "CALL modificarnodo(?,?,?,?)";
            $stm = $this->db->prepare($sql);
            $stm->bindParam(1, $this->idnodo);
            $stm->bindParam(2, $this->nombre);
            $stm->bindParam(3, $this->direccion);
            $stm->bindParam(4, $this->ciudad);
            $stm->execute();
         }

         // public function consultaciudad(){
         //   $sql = "CALL consultaciudad";
         //   $stm = $this->db->prepare($sql);
         //   $stm->execute();
         //   return $stm->fetchAll(PDO::FETCH_ASSOC);
         // }



}
