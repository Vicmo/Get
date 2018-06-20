
<?php

class mdlmateriales
{
 
    private $db;
    private $id;
    private $laboratorio;
    private $tipo;
    private $cantidad;
    private $item;
    private $anoc;
    private $horas;
    private $precio;
 

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
      $sql = "CALL consultarmaterial";
     $stm = $this->db->prepare($sql);
     $stm->execute();
     return $stm->fetchAll(PDO::FETCH_ASSOC);

   }

  public function consultarlabo()
    {
      $sql = "CALL consultalabo";
     $stm = $this->db->prepare($sql);
     $stm->execute();
     return $stm->fetchAll(PDO::FETCH_ASSOC);

   }

   
   
  public function consultartp()
    {
      $sql = "CALL consultatp";
     $stm = $this->db->prepare($sql);
     $stm->execute();
     return $stm->fetchAll(PDO::FETCH_ASSOC);

   }



   public function uno()
   {
       $sql = "CALL consultaunomat(?)";
       $stm = $this->db->prepare($sql);
       $stm->bindParam(1, $this->id);
       $stm->execute();
       return $stm->fetch(PDO::FETCH_ASSOC);

   }

     public function modificar()
    {

      $sql = "CALL modificarmaterial(?,?,?,?,?,?,?,?)";
      $stm = $this->db->prepare($sql);
      $stm->bindParam(1, $this->id);
      $stm->bindParam(2, $this->laboratorio);
      $stm->bindParam(3, $this->tipo);
      $stm->bindParam(4, $this->cantidad);
      $stm->bindParam(5, $this->item);
      $stm->bindParam(6, $this->anoc);
      $stm->bindParam(7, $this->horas);
      $stm->bindParam(8, $this->precio);
      return $stm->execute();
     
    }


     public function registrar()
   {

       $sql = "CALL registrarmaterial(?,?,?,?,?,?,?)";
       $stm = $this->db->prepare($sql);
       $stm->bindParam(1, $this->laboratorio);
       $stm->bindParam(2, $this->tipo);
       $stm->bindParam(3, $this->cantidad);
       $stm->bindParam(4, $this->item);
       $stm->bindParam(5, $this->anoc);
       $stm->bindParam(6, $this->horas);
       $stm->bindParam(7, $this->precio);
       return $stm->execute();

   }

  
}
       