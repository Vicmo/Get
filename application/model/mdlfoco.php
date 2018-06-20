
<?php

class mdlfoco
{
 
    private $db;
    private $idfoco;
    private $nombre;
    private $linea;
 

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



    public function consultar()
    {
      $sql = "CALL consultarfoco";
     $stm = $this->db->prepare($sql);
     $stm->execute();
     return $stm->fetchAll(PDO::FETCH_ASSOC);

   }

   public function uno()
   {
       $sql = "CALL verfoco(?)";
       $stm = $this->db->prepare($sql);
       $stm->bindParam(1, $this->idfoco);
       $stm->execute();
       return $stm->fetch(PDO::FETCH_ASSOC);

   }

     public function modificar()
    {

        $sql = "CALL modificarfoco(?,?,?)";
        $stm = $this->db->prepare($sql);
        $stm->bindParam(1, $this->idfoco);
        $stm->bindParam(2, $this->nombre);
        $stm->bindParam(3, $this->linea);
        return $stm->execute();
     
    }


     public function registrar()
   {

       $sql = "CALL registrarfoco(?,?)";
       $stm = $this->db->prepare($sql);
       $stm->bindParam(1, $this->nombre);
       $stm->bindParam(2, $this->linea);
       return $stm->execute();

   }

  
}
       