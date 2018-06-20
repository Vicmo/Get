
<?php

class mdldepreciacion
{
 
    private $db;
    private $iddepreciacion;
    private $laboratorio;
    private $equipo;
    private $marca;
    private $referencia;
    private $costo;
    private $vidautil;
    private $ano;
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

        public function consultadepreciacion()
       {
           $sql = "CALL consultadepreciacion";
           $stm = $this->db->prepare($sql);
           $stm->execute();
           return $stm->fetchAll(PDO::FETCH_ASSOC);
         }  

         public function uno()
       {
       $sql = "CALL verdepreciacion(?)";
       $stm = $this->db->prepare($sql);
       $stm->bindParam(1, $this->iddepreciacion);
       $stm->execute();
       return $stm->fetch(PDO::FETCH_ASSOC);

   }
 public function registrar()
   {

       $sql = "CALL registrardepreciacion(?,?,?,?,?,?,?,?)";
       $stm = $this->db->prepare($sql);
       $stm->bindParam(1, $this->laboratorio);
       $stm->bindParam(2, $this->equipo);
       $stm->bindParam(3, $this->marca);
       $stm->bindParam(4, $this->referencia);
       $stm->bindParam(5, $this->costo);
       $stm->bindParam(6, $this->vidautil);
       $stm->bindParam(7, $this->ano);
       $stm->bindParam(8, $this->horauso);
       $stm->execute();

   }
   public function modificar()
   {

      $sql = "CALL modificardepreciacion(?,?,?,?,?,?,?,?,?)";
       $stm = $this->db->prepare($sql);
       $stm->bindParam(1, $this->iddepreciacion);
       $stm->bindParam(2, $this->laboratorio);
       $stm->bindParam(3, $this->equipo);
       $stm->bindParam(4, $this->marca);
       $stm->bindParam(5, $this->referencia);
       $stm->bindParam(6, $this->costo);
       $stm->bindParam(7, $this->vidautil);
       $stm->bindParam(8, $this->ano);
       $stm->bindParam(9, $this->horauso);
       $stm->execute();

   } 
}
       