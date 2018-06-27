<?php

class mdlciudad
{

    private $db;
    private $id;

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

    public function consultardepto(){
          $sql = "SELECT * FROM departamento";
          $stm = $this->db->prepare($sql);
          $stm->execute();
          return $stm->fetchAll(PDO::FETCH_ASSOC);
    }

    public function consultarciudad(){
      $sql = "CALL consultarciudad(?)";
      $stm = $this->db->prepare($sql);
      $stm->bindParam(1, $this->iddepartamento);
      $stm->execute();
      return $stm->fetchAll(PDO::FETCH_ASSOC);

    }


}
