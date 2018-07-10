
<?php

class mdlgrupos
{

    private $db;
    private $id;
    private $gestor;
    private $nombre;
    private $institucion;
    private $clasificacion;
    private $tipo;
    private $fecha;
    private $observaciones;
    private $idgrupo;
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


 public function registrar()
   {
       $sql = "CALL registrargrupos(?,?,?,?,?,?,?)";
       $stm = $this->db->prepare($sql);
       $stm->bindParam(1, $this->gestor);
       $stm->bindParam(2, $this->nombre);
       $stm->bindParam(3, $this->institucion);
       $stm->bindParam(4, $this->clasificacion);
       $stm->bindParam(5, $this->tipo);
       $stm->bindParam(6, $this->fecha);
       $stm->bindParam(7, $this->observaciones);
       $stm->execute();

   }

     public function consulta()
    {
        $sql = "CALL consultagrupos(?)";
        $stm = $this->db->prepare($sql);
        $stm->bindParam(1, $this->gestor);
        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_ASSOC);

    }

         public function consultaad()
    {
        $sql = "CALL consultagruposad(?)";
        $stm = $this->db->prepare($sql);
        $stm->bindParam(1, $this->idnodo);
        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_ASSOC);

    }

    public function modificar()
   {
       $sql = "CALL modificargrupos(?,?,?,?,?,?,?,?)";
       $stm = $this->db->prepare($sql);
       $stm->bindParam(1, $this->gestor);
       $stm->bindParam(2, $this->nombre);
       $stm->bindParam(3, $this->institucion);
       $stm->bindParam(4, $this->clasificacion);
       $stm->bindParam(5, $this->tipo);
       $stm->bindParam(6, $this->fecha);
       $stm->bindParam(7, $this->observacion);
        $stm->bindParam(8, $this->idgrupo);
       $stm->execute();

   }

    public function uno()
      {
       $sql = "CALL vergrupo(?)";
       $stm = $this->db->prepare($sql);
       $stm->bindParam(1, $this->idgrupo);
       $stm->execute();
       return $stm->fetch(PDO::FETCH_ASSOC);

   }
}
