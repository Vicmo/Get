
<?php

class mdllaboratorio
{
 
    private $db;
    private $idlaboratorio;
    private $nombre;
    private $linea;
    private $participacioncostos;
 


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
      $sql = "CALL consultarlaboratorio";
     $stm = $this->db->prepare($sql);
     $stm->execute();
     return $stm->fetchAll(PDO::FETCH_ASSOC);

   }

   public function uno()
   {
       $sql = "CALL verlaboratorio(?)";
       $stm = $this->db->prepare($sql);
       $stm->bindParam(1, $this->idlaboratorio);
       $stm->execute();
       return $stm->fetch(PDO::FETCH_ASSOC);

   }

     public function modificar()
    {

        $sql = "CALL modificarlaboratorio(?,?,?,?)";
        $stm = $this->db->prepare($sql);
        $stm->bindParam(1, $this->idlaboratorio);
        $stm->bindParam(2, $this->nombre);
        $stm->bindParam(3, $this->linea);
        $stm->bindParam(4, $this->participacioncostos);
        return $stm->execute();
     
    }


     public function registrar()
   {

       $sql = "CALL registrarlaboratorio(?,?,?)";
       $stm = $this->db->prepare($sql);
       $stm->bindParam(1, $this->linea);
       $stm->bindParam(2, $this->nombre);
       $stm->bindParam(3, $this->participacioncostos);
       return $stm->execute();
   }

  
}
       