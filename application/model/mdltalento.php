<?php

class mdltalento
{

   private $db;
   private $tipodocumento;
   private $documento;
   private $nombres;
   private $apellidos;
   private $fechanacimiento;
   private $ocupacion;
   private $genero;
   private $tipotalento;
   private $correo;
   private $numerofijo;
   private $numerocelular;
   private $ciudad;
   private $direccion;
   private $estrato;
   private $nivelacademico;
   private $titulobtenido;
   private $anoterminacion;
   private $institucion;
   private $des_ocu;

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
   public function consultatipodoc()
    {
        $sql = "CALL consultatipodoc";
        $stm = $this->db->prepare($sql);
        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_ASSOC);

    }

 public function consultaocu()
    {
        $sql = "CALL consultaocu";
        $stm = $this->db->prepare($sql);
        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_ASSOC);

    }

   public function consultatipotale()
    {
        $sql = "CALL consultatipotale";
        $stm = $this->db->prepare($sql);
        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_ASSOC);

    }


   public function consultadepto()
    {
        $sql = "CALL consultadepto";
        $stm = $this->db->prepare($sql);
        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_ASSOC);

    }

      public function consultatalento(){
    $sql = "CALL consultatalento";
    $stm = $this->db->prepare($sql);
   $stm->execute();
   return $stm->fetchAll(PDO::FETCH_ASSOC);
  }

     public function consultanivelaca()
    {
        $sql = "CALL consultanivelaca";
        $stm = $this->db->prepare($sql);
        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_ASSOC);

    }
      public function registrartalento()
   {

       $sql = "CALL registrartalento(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
       $stm = $this->db->prepare($sql);
       $stm->bindParam(1, $this->tipodocumento);
       $stm->bindParam(2, $this->documento);
       $stm->bindParam(3, $this->nombres);
       $stm->bindParam(4, $this->apellidos);
       $stm->bindParam(5, $this->fechanacimiento);
       $stm->bindParam(6, $this->ocupacion);
       $stm->bindParam(7, $this->genero);
       $stm->bindParam(8, $this->tipotalento);
       $stm->bindParam(9, $this->correo);
       $stm->bindParam(10, $this->numerofijo);
       $stm->bindParam(11, $this->numerocelular);
       $stm->bindParam(12, $this->ciudad);
       $stm->bindParam(13, $this->direccion);
       $stm->bindParam(14, $this->estrato);
       $stm->bindParam(15, $this->nivelacademico);
       $stm->bindParam(16, $this->titulobtenido);
       $stm->bindParam(17, $this->anoterminacion);
       $stm->bindParam(18, $this->institucion);
       $stm->bindParam(19, $this->des_ocu);
       $stm->execute();

   }


   ##################################################################################
   #															Inicio método ver																	#
   ##################################################################################
   #---------------- Ejecuta el procedimiento almacenado para ver el detalle del talento según el id -----------------------#
   public function ver(){

       $sql = "CALL vertalento(?)";
       $stm = $this->db->prepare($sql);
       $stm->bindParam(1, $this->idpersona);
       $stm->execute();
       return $stm->fetch(PDO::FETCH_ASSOC);

   }

  ##################################################################################
  #														  	Fin método ver																	#
  ##################################################################################


   ##################################################################################
   #															Inicio método verproyectotalento																	#
   ##################################################################################
   #---------------- Ejecuta el procedimiento almacenado para ver el detalle del talento según el id -----------------------#
   public function verproyectotalento(){

       $sql = "CALL verproyectotalento(?)";
       $stm = $this->db->prepare($sql);
       $stm->bindParam(1, $this->idpersona);
       $stm->execute();
       return $stm->fetchAll(PDO::FETCH_ASSOC);

   }

  ##################################################################################
  #														  	Fin método verproyectotalento										#
  ##################################################################################

      public function consultatalentog()
   {
       $sql = "CALL reportegestort(?)";
       $stm = $this->db->prepare($sql);
       $stm->bindParam(1, $this->idges);
       $stm->execute();
       return $stm->fetchAll(PDO::FETCH_ASSOC);

   }


   ################ Inicio método reportetalentosadmin ################

   #--------------------- Muestra todos los talentos por nodo ---------------------#

   public function reportestalentosadmin()
   {

       $sql = "CALL reportestalentosadmin(?)";
       $stm = $this->db->prepare($sql);
       $stm->bindParam(1, $this->idnodo);
       $stm->execute();
       return $stm->fetchAll(PDO::FETCH_ASSOC);

   }

   ################ Fin método reporte talentos admin ################


   ################ Inicio método reportetalentosadminpora ################
   #--------------------- Muestra todos los talentos filtrados por año y por nodo ---------------------#

   public function reportestalentosadminpora()
   {
       $sql = "CALL reportestalentosadminpora(?,?)";
       $stm = $this->db->prepare($sql);
       $stm->bindParam(1, $this->ano);
       $stm->bindParam(2, $this->idnodo);
       $stm->execute();
       return $stm->fetchAll(PDO::FETCH_ASSOC);

   }

   #              Fin método reportetalentosadminpora              #


      public function correo()
   {
       $sql = "CALL correotalento(?)";
       $stm = $this->db->prepare($sql);
       $stm->bindParam(1, $this->correo);
       $stm->execute();
       return $stm->fetch(PDO::FETCH_ASSOC);

   }

    public function modificartalento()
   {

       $sql = "CALL modificartalento(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
       $stm = $this->db->prepare($sql);
       $stm->bindParam(1, $this->tipodocumento);
       $stm->bindParam(2, $this->documento);
       $stm->bindParam(3, $this->nombres);
       $stm->bindParam(4, $this->apellidos);
       $stm->bindParam(5, $this->fechanacimiento);
       $stm->bindParam(6, $this->ocupacion);
       $stm->bindParam(7, $this->genero);
       $stm->bindParam(8, $this->tipotalento);
       $stm->bindParam(9, $this->correo);
       $stm->bindParam(10, $this->numerofijo);
       $stm->bindParam(11, $this->numerocelular);
       $stm->bindParam(12, $this->ciudad);
       $stm->bindParam(13, $this->direccion);
       $stm->bindParam(14, $this->estrato);
       $stm->bindParam(15, $this->nivelacademico);
       $stm->bindParam(16, $this->titulobtenido);
       $stm->bindParam(17, $this->anoterminacion);
       $stm->bindParam(18, $this->institucion);
       $stm->bindParam(19, $this->des_ocu);
       $stm->execute();

   }
}
