<?php

class mdlmantenimiento
{
 
    private $db;
    private $idmantenimiento;
    private $laboratorio;
    private $item;
    private $precio;
    private $vidautil;
    private $anoum;
    private $horauso;

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


       public function consultalaboratorioo()
       {
           $sql = "CALL consultalaboratorioo";
           $stm = $this->db->prepare($sql);
           $stm->execute();
           return $stm->fetchAll(PDO::FETCH_ASSOC);
         }   

        public function consultamantenimiento()
       {
           $sql = "CALL consultamantenimiento";
           $stm = $this->db->prepare($sql);
           $stm->execute();
           return $stm->fetchAll(PDO::FETCH_ASSOC);
         }  

         public function uno()
       {
       $sql = "CALL vermantenimiento(?)";
       $stm = $this->db->prepare($sql);
       $stm->bindParam(1, $this->idmantenimiento);
       $stm->execute();
       return $stm->fetch(PDO::FETCH_ASSOC);

   }
 public function registrar()
   {

       $sql = "CALL registrarmantenimiento(?,?,?,?,?,?)";
       $stm = $this->db->prepare($sql);
       $stm->bindParam(1, $this->laboratorio);
       $stm->bindParam(2, $this->item);
       $stm->bindParam(3, $this->precio);
       $stm->bindParam(4, $this->vidautil);
       $stm->bindParam(5, $this->anoum);     
       $stm->bindParam(6, $this->horauso);
       $stm->execute();

   }
   public function modificar()
   {

       $sql = "CALL modificarmantenimiento(?,?,?,?,?,?,?)";
       $stm = $this->db->prepare($sql);
       $stm->bindParam(1, $this->idmantenimiento);
       $stm->bindParam(2, $this->laboratorio);
       $stm->bindParam(3, $this->item);
       $stm->bindParam(4, $this->precio);
       $stm->bindParam(5, $this->vidautil);
       $stm->bindParam(6, $this->anoum);     
       $stm->bindParam(7, $this->horauso);
       $stm->execute();

   } 
}
       