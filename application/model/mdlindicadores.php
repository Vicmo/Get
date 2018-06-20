
<?php

class mdlindicadores
{

    private $db;
    private $linea;
    private $gestor;
    private $ano;

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

         public function indicadorestipoproyecto()
   {
       $sql = "CALL reportetipoproyecto";
       $stm = $this->db->prepare($sql);
       $stm->execute();
       return $stm->fetchAll(PDO::FETCH_ASSOC);

   }

   public function proyectosinscritos()
   {
       $sql = "CALL proyectosinscritos(?)";
       $stm = $this->db->prepare($sql);
        $stm->bindParam(1, $this->ano);
       $stm->execute();
       return $stm->fetchAll(PDO::FETCH_ASSOC);

   }

   public function arteins()
   {
       $sql = "CALL proyectosarteins(?)";
       $stm = $this->db->prepare($sql);
        $stm->bindParam(1, $this->ano);
       $stm->execute();
       return $stm->fetchAll(PDO::FETCH_ASSOC);

   }

   public function artempfin()
   {
       $sql = "CALL proyectoartfinemp(?)";
       $stm = $this->db->prepare($sql);
       $stm->bindParam(1, $this->ano);
       $stm->execute();
       return $stm->fetchAll(PDO::FETCH_ASSOC);

   }
   public function artempeje()
   {
       $sql = "CALL proyectorartejecucionemp2";
       $stm = $this->db->prepare($sql);
       $stm->execute();
       return $stm->fetchAll(PDO::FETCH_ASSOC);

   }

   public function prototipofinalizado()
   {
       $sql = "CALL prototipomes(?)";
       $stm = $this->db->prepare($sql);
        $stm->bindParam(1, $this->ano);
       $stm->execute();
       return $stm->fetchAll(PDO::FETCH_ASSOC);

   }
   public function prototipomercado()
   {
       $sql = "CALL consultaprototipomercado(?)";
       $stm = $this->db->prepare($sql);
        $stm->bindParam(1, $this->ano);
       $stm->execute();
       return $stm->fetchAll(PDO::FETCH_ASSOC);

   }


          public function reportegrupos()
   {
       $sql = "CALL reportegrupos(?)";
       $stm = $this->db->prepare($sql);
        $stm->bindParam(1, $this->ano);
       $stm->execute();
       return $stm->fetch(PDO::FETCH_ASSOC);

   }

             public function reportegruposlinea()
   {
       $sql = "CALL reportegruposlinea(?,?)";
       $stm = $this->db->prepare($sql);
        $stm->bindParam(1, $this->ano);
        $stm->bindParam(2, $this->linea);
       $stm->execute();
       return $stm->fetch(PDO::FETCH_ASSOC);

   }

           public function reportegruposgestor()
   {
       $sql = "CALL reportegruposgestor(?,?)";
       $stm = $this->db->prepare($sql);
        $stm->bindParam(1, $this->ano);
        $stm->bindParam(2, $this->gestor);
       $stm->execute();
       return $stm->fetch(PDO::FETCH_ASSOC);

   }

           public function reportedtlinea()
   {
       $sql = "CALL reportedtlinea(?,?)";
       $stm = $this->db->prepare($sql);
       $stm->bindParam(1, $this->ano);
       $stm->bindParam(2, $this->linea);
       $stm->execute();
       return $stm->fetch(PDO::FETCH_ASSOC);

   }

             public function reportedtgestor()
   {
       $sql = "CALL reportedtgestor(?,?)";
       $stm = $this->db->prepare($sql);
       $stm->bindParam(1, $this->ano);
       $stm->bindParam(2, $this->gestor);
       $stm->execute();
       return $stm->fetch(PDO::FETCH_ASSOC);

   }

             public function reportedt()
   {
       $sql = "CALL reportedt(?)";
       $stm = $this->db->prepare($sql);
       $stm->bindParam(1, $this->ano);
       $stm->execute();
       return $stm->fetch(PDO::FETCH_ASSOC);

   }

            public function reporteempresa()
   {
       $sql = "CALL reporteempresa(?)";
       $stm = $this->db->prepare($sql);
       $stm->bindParam(1, $this->ano);
       $stm->execute();
       return $stm->fetch(PDO::FETCH_ASSOC);

   }

           public function indicadoresestadoproyecto()
   {
       $sql = "CALL reportestadoproyecto(?)";
       $stm = $this->db->prepare($sql);
        $stm->bindParam(1, $this->ano);
       $stm->execute();
       return $stm->fetchAll(PDO::FETCH_ASSOC);

   }

          public function indicadoreslinea()
   {
       $sql = "CALL reportestadoproyectolinea(?)";
       $stm = $this->db->prepare($sql);
       $stm->bindParam(1, $this->linea);
       $stm->execute();
       return $stm->fetchAll(PDO::FETCH_ASSOC);

   }

       public function reporteempresalinea()
   {
       $sql = "CALL reporteempresalinea(?,?)";
       $stm = $this->db->prepare($sql);
       $stm->bindParam(1, $this->linea);
       $stm->bindParam(2, $this->ano);
       $stm->execute();
       return $stm->fetch(PDO::FETCH_ASSOC);

   }

       public function reporteempresagestor()
   {
       $sql = "CALL reporteempresagestor(?,?)";
       $stm = $this->db->prepare($sql);
       $stm->bindParam(1, $this->gestor);
       $stm->bindParam(2, $this->ano);
       $stm->execute();
       return $stm->fetch(PDO::FETCH_ASSOC);

   }

          public function reportelineaestado()
   {
       $sql = "CALL reportelineaestado(?,?)";
       $stm = $this->db->prepare($sql);
       $stm->bindParam(1, $this->linea);
       $stm->bindParam(2, $this->ano);
       $stm->execute();
       return $stm->fetchAll(PDO::FETCH_ASSOC);

     }


           public function indicadoresgestor()
   {
       $sql = "CALL reportestadoproyectogestor(?,?)";
       $stm = $this->db->prepare($sql);
       $stm->bindParam(1, $this->gestor);
       $stm->bindParam(2, $this->ano);
       $stm->execute();
       return $stm->fetchAll(PDO::FETCH_ASSOC);

   }
}
