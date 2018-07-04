
<?php

class mdlproyecto
{

   private $db;
   private $id;
   private $idp;
   private$nombre;
   private$descripcion;
   private$fechacreacion;
   private$nit;
   private$razonsocial;
   private$sector;
   private$gestor;
   private$foco;
   private$estadoproyecto;
   private$tipoproyecto;
   private$cedulalider;
   private$observaciones;
   private$pro_art_tecnoaca;
   private$apre_apoyo;
   private$apre_sinapoyo;
   private$arti_cti;
   private $nom_act_cti;
   private $diri_ar_emp;
   private $reci_ar_emp;
   private $dine_rega;
   private $aco_pro_pate;
   private $pata_publi;
   private $id_pate;
   private $fechacierre;
   private $actainicio;
   private $propuesta;
   private $bookplaneacion;
   private $cronograma;
   private $bookejecucion;
   private $lecciones;
   private $ficha;
   private $video;
   private $actacierre;
   private $link;
   private $revisadofinal;
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


     public function consultauso(){
           $sql = "SELECT idproyecto,id,nombre from proyecto";
           $stm = $this->db->prepare($sql);
           $stm->execute();
           return $stm->fetchAll(PDO::FETCH_ASSOC);
         }


         public function consultausod()
    {
        $sql = "CALL consultausod(?)";
        $stm = $this->db->prepare($sql);
        $stm->bindParam(1, $this->proyecto);
        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_ASSOC);

    }

         public function consultausop()
    {
        $sql = "CALL consultausop(?)";
        $stm = $this->db->prepare($sql);
        $stm->bindParam(1, $this->gestor);
        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_ASSOC);

    }

         public function consultausot()
    {
        $sql = "CALL consultausot(?)";
        $stm = $this->db->prepare($sql);
        $stm->bindParam(1, $this->talento);
        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_ASSOC);

    }

    public function registrar()
   {

       $sql = "CALL registrarproyecto(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
       $stm = $this->db->prepare($sql);
       $stm->bindParam(1, $this->id);
       $stm->bindParam(2, $this->idp);
       $stm->bindParam(3, $this->nombre);
       $stm->bindParam(4, $this->descripcion);
       $stm->bindParam(5, $this->fechacreacion);
       $stm->bindParam(6, $this->nit);
       $stm->bindParam(7, $this->razonsocial);
       $stm->bindParam(8, $this->sector);
       $stm->bindParam(9, $this->gestor);
       $stm->bindParam(10, $this->foco);
       $stm->bindParam(11, $this->estadoproyecto);
       $stm->bindParam(12, $this->tipoproyecto);
       $stm->bindParam(13, $this->cedulalider);
       $stm->bindParam(14, $this->observaciones);
       $stm->bindParam(15, $this->pro_art_tecnoaca);
       $stm->bindParam(16, $this->apre_apoyo);
       $stm->bindParam(17, $this->apre_sinapoyo);
       $stm->bindParam(18, $this->arti_cti);
       $stm->bindParam(19, $this->nom_act_cti);
       $stm->bindParam(20, $this->diri_ar_emp);
       $stm->bindParam(21, $this->reci_ar_emp);
       $stm->bindParam(22, $this->dine_rega);
       $stm->bindParam(23, $this->aco_pro_pate);
       $stm->bindParam(24, $this->pata_publi);
       $stm->bindParam(25, $this->id_pate);
       $stm->execute();

   }


  public function modificar()
   {

       $sql = "CALL modificarproyecto(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
       $stm = $this->db->prepare($sql);
       $stm->bindParam(1, $this->id);
       $stm->bindParam(2, $this->idp);
       $stm->bindParam(3, $this->nombre);
       $stm->bindParam(4, $this->descripcion);
       $stm->bindParam(5, $this->fechacreacion);
       $stm->bindParam(6, $this->nit);
       $stm->bindParam(7, $this->razonsocial);
       $stm->bindParam(8, $this->sector);
       $stm->bindParam(9, $this->gestor);
       $stm->bindParam(10, $this->foco);
       $stm->bindParam(11, $this->estadoproyecto);
       $stm->bindParam(12, $this->tipoproyecto);
       $stm->bindParam(13, $this->cedulalider);
       $stm->bindParam(14, $this->observaciones);
       $stm->bindParam(15, $this->pro_art_tecnoaca);
       $stm->bindParam(16, $this->apre_apoyo);
       $stm->bindParam(17, $this->apre_sinapoyo);
       $stm->bindParam(18, $this->arti_cti);
       $stm->bindParam(19, $this->nom_act_cti);
       $stm->bindParam(20, $this->diri_ar_emp);
       $stm->bindParam(21, $this->reci_ar_emp);
       $stm->bindParam(22, $this->dine_rega);
       $stm->bindParam(23, $this->aco_pro_pate);
       $stm->bindParam(24, $this->pata_publi);
       $stm->bindParam(25, $this->id_pate);
       $stm->bindParam(26, $this->fechacierre);
       $stm->execute();

   }


  public function modificarentregables()
   {

       $sql = "CALL modificarentregables(?,?,?,?,?,?,?,?,?,?,?)";
       $stm = $this->db->prepare($sql);
       $stm->bindParam(1, $this->id);
       $stm->bindParam(2, $this->actainicio);
       $stm->bindParam(3, $this->propuesta);
       $stm->bindParam(4, $this->bookplaneacion);
       $stm->bindParam(5, $this->cronograma);
       $stm->bindParam(6, $this->bookejecucion);
       $stm->bindParam(7, $this->lecciones);
       $stm->bindParam(8, $this->ficha);
       $stm->bindParam(9, $this->video);
       $stm->bindParam(10, $this->actacierre);
       $stm->bindParam(11, $this->link);
       $stm->execute();

   }


  public function modificara()
   {

       $sql = "CALL modificarproyectoa(?,?)";
       $stm = $this->db->prepare($sql);
       $stm->bindParam(1, $this->id);
       $stm->bindParam(2, $this->gestor);
       $stm->execute();

   }

     public function revisadofinal()
   {

       $sql = "CALL modificarrevisadofinal(?,?)";
       $stm = $this->db->prepare($sql);
       $stm->bindParam(1, $this->id);
       $stm->bindParam(2, $this->revisadofinal);
       $stm->execute();

   }

    public function consultagestor(){
    $sql = "CALL consultagestor";
    $stm = $this->db->prepare($sql);
   $stm->execute();
   return $stm->fetchAll(PDO::FETCH_ASSOC);
  }

   public function consultasector(){
    $sql = "CALL consultasector";
    $stm = $this->db->prepare($sql);
   $stm->execute();
   return $stm->fetchAll(PDO::FETCH_ASSOC);
  }
   public function consultafoco(){
    $sql = "CALL consultafoco";
    $stm = $this->db->prepare($sql);
   $stm->execute();
   return $stm->fetchAll(PDO::FETCH_ASSOC);
  }
   public function consultaestadoproyecto(){
    $sql = "CALL consultaestadoproyecto";
    $stm = $this->db->prepare($sql);
   $stm->execute();
   return $stm->fetchAll(PDO::FETCH_ASSOC);
  }
   public function consultatipoproyecto(){
    $sql = "CALL consultatipoproyecto";
    $stm = $this->db->prepare($sql);
   $stm->execute();
   return $stm->fetchAll(PDO::FETCH_ASSOC);
  }
   public function consultalider(){
    $sql = "CALL consultalider";
    $stm = $this->db->prepare($sql);
   $stm->execute();
   return $stm->fetchAll(PDO::FETCH_ASSOC);
  }


      public function consultaproyecto(){
    $sql = "CALL consultaproyecto(?)";
    $stm = $this->db->prepare($sql);
    $stm->bindParam(1, $this->idnodo);
   $stm->execute();
   return $stm->fetchAll(PDO::FETCH_ASSOC);
  }

     public function verp()
   {
       $sql = "CALL verproyecto(?)";
       $stm = $this->db->prepare($sql);
       $stm->bindParam(1, $this->idproyecto);
       $stm->execute();
       return $stm->fetch(PDO::FETCH_ASSOC);

   }

      public function consultarproyecto()
   {
       $sql = "CALL consultaproyectog(?,?)";
       $stm = $this->db->prepare($sql);
       $stm->bindParam(1, $this->gestor);
       $stm->bindParam(2, $this->ano);
       $stm->execute();
       return $stm->fetchAll(PDO::FETCH_ASSOC);

   }

    public function consultaidp()
   {
       $sql = "CALL consultaidp(?)";
       $stm = $this->db->prepare($sql);
       $stm->bindParam(1, $this->idproyecto);
       $stm->execute();
       return $stm->fetch(PDO::FETCH_ASSOC);

   }


    public function consultapatente()
   {
       $sql = "CALL consultapatente(?)";
       $stm = $this->db->prepare($sql);
       $stm->bindParam(1, $this->idproyecto);
       $stm->execute();
       return $stm->fetch(PDO::FETCH_ASSOC);

   }

   public function consultacp()
   {
       $sql = "CALL consultacp(?)";
       $stm = $this->db->prepare($sql);
       $stm->bindParam(1, $this->id);
       $stm->execute();
       return $stm->fetch(PDO::FETCH_ASSOC);

   }


    public function consultadetalletalen(){
    $sql = "CALL consultadetalletalenp(?)";
    $stm = $this->db->prepare($sql);
    $stm->bindParam(1, $this->idproyecto);
    $stm->execute();
    return $stm->fetchAll(PDO::FETCH_ASSOC);
   }

    public function consultafocoo(){
    $sql = "CALL consultafco(?)";
    $stm = $this->db->prepare($sql);
    $stm->bindParam(1, $this->linea);
    $stm->execute();
    return $stm->fetchAll(PDO::FETCH_ASSOC);
   }


    public function consultagestorl(){
    $sql = "CALL consultagestorl(?)";
    $stm = $this->db->prepare($sql);
    $stm->bindParam(1, $this->linea);
    $stm->execute();
    return $stm->fetchAll(PDO::FETCH_ASSOC);
   }

   public function consultaestadoproyectoo(){
    $sql = "CALL consultaestadoproyectoo";
    $stm = $this->db->prepare($sql);
   $stm->execute();
   return $stm->fetchAll(PDO::FETCH_ASSOC);
  }

     public function consultaultima()
    {
        $sql = "CALL ultimoproyecto";
        $stm = $this->db->prepare($sql);
        $stm->execute();
        return $stm->fetch(PDO::FETCH_ASSOC);

    }

   public function consultaultimo()
    {
        $sql = "CALL ultimooproyecto";
        $stm = $this->db->prepare($sql);
        $stm->execute();
        return $stm->fetch(PDO::FETCH_ASSOC);

    }

      public function registrardetalle()
    {
        $sql = "CALL registrarproyectodt(?,?)";
        $stm = $this->db->prepare($sql);
        $stm->bindParam(1, $this->proyecto);
        $stm->bindParam(2, $this->talento);
        $stm->execute();

    }

        public function eliminardetalle()
    {
        $sql = "CALL eliminardetallet(?)";
        $stm = $this->db->prepare($sql);
        $stm->bindParam(1, $this->proyecto);
        $stm->execute();

    }


}
