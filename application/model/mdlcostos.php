
<?php

class mdlcostos
{

    private $db;
    private $id;
    private $idnodo;

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


        public function costosgestor()
   {
       $sql = "CALL costosgestor(?)";
       $stm = $this->db->prepare($sql);
       $stm->bindParam(1, $this->id);
       $stm->execute();
       return $stm->fetchAll(PDO::FETCH_ASSOC);

   }
   public function horasasesoria()
   {
       $sql = "CALL costoshorasasesoria(?)";
       $stm = $this->db->prepare($sql);
       $stm->bindParam(1, $this->id);
       $stm->execute();
       return $stm->fetchAll(PDO::FETCH_ASSOC);

   }


        public function costosadmin()
   {
       $sql = "CALL calculocostos(?)";
       $stm = $this->db->prepare($sql);
       $stm->bindParam(1, $this->idnodo);
       $stm->execute();
       return $stm->fetch(PDO::FETCH_ASSOC);

   }


        public function consultaproyectoc()
   {
       $sql = "CALL consultaproyectoc";
       $stm = $this->db->prepare($sql);
       $stm->execute();
       return $stm->fetchAll(PDO::FETCH_ASSOC);

   }
   public function consultaproyectogestor()
   {
       $sql = "CALL consultaproyectogestor(?, ?)";
       $stm = $this->db->prepare($sql);
       $stm->bindParam(1, $this->documento);
       $stm->bindParam(2, $this->ano);
       $stm->execute();
       return $stm->fetchAll(PDO::FETCH_ASSOC);

   }

      public function valoradmin()
   {
       $sql = "CALL valoradmin(?,?)";
       $stm = $this->db->prepare($sql);
       $stm->bindParam(1, $this->id);
       $stm->bindParam(2, $this->idnodo);
       $stm->execute();
       return $stm->fetchAll(PDO::FETCH_ASSOC);

   }

     public function costosdepreciacion()
   {
       $sql = "CALL costosdepreciacion(?)";
       $stm = $this->db->prepare($sql);
       $stm->bindParam(1, $this->id);
       $stm->execute();
       return $stm->fetchAll(PDO::FETCH_ASSOC);

   }

    public function costosmantenimiento()
   {
       $sql = "CALL costosmantenimiento(?)";
       $stm = $this->db->prepare($sql);
       $stm->bindParam(1, $this->id);
       $stm->execute();
       return $stm->fetchAll(PDO::FETCH_ASSOC);

   }

    public function costosmateriales()
   {
       $sql = "CALL costosmateriales(?)";
       $stm = $this->db->prepare($sql);
       $stm->bindParam(1, $this->id);
       $stm->execute();
       return $stm->fetchAll(PDO::FETCH_ASSOC);

   }


}
