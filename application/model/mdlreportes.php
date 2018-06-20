
<?php

class mdlreportes
{
 
    private $db;
    private $fi;
    private $ff;
    private $l;
    private $g;

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


         public function reportemantenimientolinea()
   {
       $sql = "CALL reportemantenimientolinea(?,?,?)";
       $stm = $this->db->prepare($sql);
       $stm->bindParam(1, $this->fi);
       $stm->bindParam(2, $this->ff);
       $stm->bindParam(3, $this->l);
       $stm->execute();
       return $stm->fetchAll(PDO::FETCH_ASSOC);

   }

       public function reporteasesoriaslinea()
   {
       $sql = "CALL reporteasesoriaslinea(?,?,?)";
       $stm = $this->db->prepare($sql);
       $stm->bindParam(1, $this->fi);
       $stm->bindParam(2, $this->ff);
       $stm->bindParam(3, $this->l);
       $stm->execute();
       return $stm->fetch(PDO::FETCH_ASSOC);

   }

      public function reportematerialeslinea()
   {
       $sql = "CALL reportematerialeslinea(?,?,?)";
       $stm = $this->db->prepare($sql);
       $stm->bindParam(1, $this->fi);
       $stm->bindParam(2, $this->ff);
       $stm->bindParam(3, $this->l);
       $stm->execute();
       return $stm->fetchAll(PDO::FETCH_ASSOC);

   }


         public function reporte()
   {
       $sql = "CALL reporte(?,?,?)";
       $stm = $this->db->prepare($sql);
       $stm->bindParam(1, $this->fi);
       $stm->bindParam(2, $this->ff);
       $stm->bindParam(3, $this->l);
       $stm->execute();
       return $stm->fetch(PDO::FETCH_ASSOC);

   }

       public function reporteadminlinea()
   {
       $sql = "CALL reporteadminlinea(?,?,?)";
       $stm = $this->db->prepare($sql);
       $stm->bindParam(1, $this->fi);
       $stm->bindParam(2, $this->ff);
       $stm->bindParam(3, $this->l);
       $stm->execute();
       return $stm->fetch(PDO::FETCH_ASSOC);

   }



       public function reportetalentosg()
   {
       $sql = "CALL reportetalentosg(?,?)";
       $stm = $this->db->prepare($sql);
       $stm->bindParam(1, $this->fecha);
       $stm->bindParam(2, $this->gestor);
       $stm->execute();
       return $stm->fetchAll(PDO::FETCH_ASSOC);

   }

      public function reportetalentos()
   {
       $sql = "CALL reportetalentos(?)";
       $stm = $this->db->prepare($sql);
       $stm->bindParam(1, $this->ano);
       $stm->execute();
       return $stm->fetchAll(PDO::FETCH_ASSOC);

   }

       public function reportetalentoslinea()
   {
       $sql = "CALL reportetalentosl(?,?)";
       $stm = $this->db->prepare($sql);
       $stm->bindParam(1, $this->ano);
       $stm->bindParam(2, $this->linea);
       $stm->execute();
       return $stm->fetchAll(PDO::FETCH_ASSOC);

   }

         public function reportetalentosgestor()
   {
       $sql = "CALL reportetalentosg(?,?)";
       $stm = $this->db->prepare($sql);
       $stm->bindParam(1, $this->ano);
       $stm->bindParam(2, $this->gestor);
       $stm->execute();
       return $stm->fetchAll(PDO::FETCH_ASSOC);

   }

       public function reportedepreciacionlinea()
   {
       $sql = "CALL reportedepreciacionlinea(?,?,?)";
       $stm = $this->db->prepare($sql);
       $stm->bindParam(1, $this->fi);
       $stm->bindParam(2, $this->ff);
       $stm->bindParam(3, $this->l);
       $stm->execute();
       return $stm->fetchAll(PDO::FETCH_ASSOC);

   }


         public function reporteg()
   {
       $sql = "CALL reporteg(?,?,?)";
       $stm = $this->db->prepare($sql);
       $stm->bindParam(1, $this->fi);
       $stm->bindParam(2, $this->ff);
       $stm->bindParam(3, $this->g);
       $stm->execute();
       return $stm->fetch(PDO::FETCH_ASSOC);

   }

          public function reportemantenimientogestor()
   {
       $sql = "CALL reportemantenimientogestor(?,?,?)";
       $stm = $this->db->prepare($sql);
       $stm->bindParam(1, $this->fi);
       $stm->bindParam(2, $this->ff);
       $stm->bindParam(3, $this->g);
       $stm->execute();
       return $stm->fetchAll(PDO::FETCH_ASSOC);

   }

       public function reporteasesoriasgestor()
   {
       $sql = "CALL reporteasesoriasgestor(?,?,?)";
       $stm = $this->db->prepare($sql);
       $stm->bindParam(1, $this->fi);
       $stm->bindParam(2, $this->ff);
       $stm->bindParam(3, $this->g);
       $stm->execute();
       return $stm->fetch(PDO::FETCH_ASSOC);

   }

      public function reportematerialesgestor()
   {
       $sql = "CALL reportematerialesgestor(?,?,?)";
       $stm = $this->db->prepare($sql);
       $stm->bindParam(1, $this->fi);
       $stm->bindParam(2, $this->ff);
       $stm->bindParam(3, $this->g);
       $stm->execute();
       return $stm->fetchAll(PDO::FETCH_ASSOC);

   }


       public function reporteadmingestor()
   {
       $sql = "CALL reporteadmingestor(?,?,?)";
       $stm = $this->db->prepare($sql);
       $stm->bindParam(1, $this->fi);
       $stm->bindParam(2, $this->ff);
       $stm->bindParam(3, $this->g);
       $stm->execute();
       return $stm->fetch(PDO::FETCH_ASSOC);

   }


       public function reportedepreciaciongestor()
   {
       $sql = "CALL reportedepreciaciongestor(?,?,?)";
       $stm = $this->db->prepare($sql);
       $stm->bindParam(1, $this->fi);
       $stm->bindParam(2, $this->ff);
       $stm->bindParam(3, $this->g);
       $stm->execute();
       return $stm->fetchAll(PDO::FETCH_ASSOC);

   }

          public function reportet()
   {
       $sql = "CALL reportet(?,?)";
       $stm = $this->db->prepare($sql);
       $stm->bindParam(1, $this->fi);
       $stm->bindParam(2, $this->ff);
       $stm->execute();
       return $stm->fetchAll(PDO::FETCH_ASSOC);

   }

          public function reportemantenimientotodo()
   {
       $sql = "CALL reportemantenimientotodo(?,?)";
       $stm = $this->db->prepare($sql);
       $stm->bindParam(1, $this->fi);
       $stm->bindParam(2, $this->ff);
       $stm->execute();
       return $stm->fetchAll(PDO::FETCH_ASSOC);

   }

       public function reportematerialestodo()
   {
       $sql = "CALL reportematerialestodo(?,?)";
       $stm = $this->db->prepare($sql);
       $stm->bindParam(1, $this->fi);
       $stm->bindParam(2, $this->ff);
       $stm->execute();
       return $stm->fetchAll(PDO::FETCH_ASSOC);

   }

     public function reporteasesoriastodo()
   {
       $sql = "CALL reporteasesoriastodo(?,?)";
       $stm = $this->db->prepare($sql);
       $stm->bindParam(1, $this->fi);
       $stm->bindParam(2, $this->ff);
       $stm->execute();
       return $stm->fetch(PDO::FETCH_ASSOC);

   }

         public function reporteadmintodo()
   {
       $sql = "CALL reporteadmintodo(?,?)";
       $stm = $this->db->prepare($sql);
       $stm->bindParam(1, $this->fi);
       $stm->bindParam(2, $this->ff);
       $stm->execute();
       return $stm->fetch(PDO::FETCH_ASSOC);

   }

     public function reportedepreciaciontodo()
   {
       $sql = "CALL reportedepreciaciontodo(?,?)";
       $stm = $this->db->prepare($sql);
       $stm->bindParam(1, $this->fi);
       $stm->bindParam(2, $this->ff);
       $stm->execute();
       return $stm->fetchAll(PDO::FETCH_ASSOC);

   }

  

   
}
       
