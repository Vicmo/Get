
<?php

class mdlpersona
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


       public function consultapersona()
       {
           $sql = "CALL consultapersona";
           $stm = $this->db->prepare($sql);
           $stm->execute();
           return $stm->fetchAll(PDO::FETCH_ASSOC);
         }

              public function ver()
      {
       $sql = "CALL verpersona(?)";
       $stm = $this->db->prepare($sql);
       $stm->bindParam(1, $this->idPersona);
       $stm->execute();
       return $stm->fetch(PDO::FETCH_ASSOC);

   }

   public function modificar(){

   }

   public function consultadoc(){

   }

   public function consultaper(){

   }


}
