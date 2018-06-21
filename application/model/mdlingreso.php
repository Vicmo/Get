
<?php

class mdlingreso
{
    //propiedades persona
    private $db;
    private $idPersona;
    private $numeroIdentificacion;
    private $nombres;
    private $apellidos;
    private $contacto;
    private $correo;
    private $idTipoPersona;
    private $idTipoDocumento;

    //propiedades ingreso
     private $fecha;
    private $horaIngreso;
    private $descripcion;
    private $horaSalida;
    private $servicios_idServicio;




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

    public function RegistrarIngreso(){
      if ($this->idPersona != null) {
      $sql = "CALL registraringreso(?,?,?,?,?,?)";
       $stm = $this->db->prepare($sql);
       $stm->bindParam(1, $this->fecha);
       $stm->bindParam(2, $this->horaIngreso);
       $stm->bindParam(3, $this->descripcion);
       $stm->bindParam(4, $this->horaSalida);
       $stm->bindParam(5, $this->idPersona);
       $stm->bindParam(6, $this->servicios_idServicio);
       $stm->execute();
       // var_dump('expression');



      }else{



      $sql1 = "CALL registraringresopersonas(?,?,?,?,?,?,?)";
      $stm1 = $this->db->prepare($sql1);
       // $stm1->bindParam(1, $this->idPersona);
       $stm1->bindParam(1, $this->numeroIdentificacion);
       $stm1->bindParam(2, $this->nombres);
       $stm1->bindParam(3, $this->apellidos);
       $stm1->bindParam(4, $this->contacto);
       $stm1->bindParam(5, $this->correo);
       $stm1->bindParam(6, $this->idTipoPersona);
       $stm1->bindParam(7, $this->idTipoDocumento);
       $stm1->execute();

       $numdocumento = $this->consultaridpersona();
        $idPersona=implode("','",$numdocumento);

       $sql = "CALL registraringreso(?,?,?,?,?,?)";
       $stm = $this->db->prepare($sql);
       $stm->bindParam(1, $this->fecha);
       $stm->bindParam(2, $this->horaIngreso);
       $stm->bindParam(3, $this->descripcion);
       $stm->bindParam(4, $this->horaSalida);
       $stm->bindParam(5, $idPersona);
       $stm->bindParam(6, $this->servicios_idServicio);
       $stm->execute();


      }

    }

    public function consultaridpersona()
       {
           $sql3 = "CALL consultaridpersona(?)";
           $stm = $this->db->prepare($sql3);
           $stm->bindParam(1, $this->numeroIdentificacion);
           $stm->execute();
           return $stm->fetch(PDO::FETCH_ASSOC);

         }


       public function consultaservicio()
       {
           $sql = "CALL consultaservicio";
           $stm = $this->db->prepare($sql);
           $stm->execute();
           return $stm->fetchAll(PDO::FETCH_ASSOC);
         }

       public function consultaingreso()
       {
           $sql = "CALL consultaingreso";
           $stm = $this->db->prepare($sql);
           $stm->execute();
           return $stm->fetchAll(PDO::FETCH_ASSOC);
         }

        public function ConsultaIngresoUsuario()
       {
           $sql = "CALL consultaingresousuario(?)";
           $stm = $this->db->prepare($sql);
           $stm->bindParam(1, $this->id);
           $stm->execute();
           return $stm->fetchAll(PDO::FETCH_ASSOC);
         }

  public function consultatipopersona()
  {
           $sql = "CALL consultatipopersona";
           $stm = $this->db->prepare($sql);
           $stm->execute();
           return $stm->fetchAll(PDO::FETCH_ASSOC);
  }

  public function consultatipodoc()
  {
           $sql = "CALL consultatipodoc";
           $stm = $this->db->prepare($sql);
           $stm->execute();
           return $stm->fetchAll(PDO::FETCH_ASSOC);
  }



}
