
<?php

class mdlusoinfraestructura
{
    private $fecha;
    private $idusoinfraestructura;
    private $proyecto;
    private $asesoriad;
    private $asesoriai;
    private $descripcion;
    private $uso;
    private $laboratorio;
    private $tiempo;
    private $talento;
    private $db;
    private $gestor;

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

    public function consultalabo()
    {
        $sql = "CALL consultausolabo(?)";
        $stm = $this->db->prepare($sql);
        $stm->bindParam(1, $this->linea);
        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_ASSOC);

    }


    public function consultaultima()
    {
        $sql = "CALL ultimouso";
        $stm = $this->db->prepare($sql);
        $stm->execute();
        return $stm->fetch(PDO::FETCH_ASSOC);

    }

      public function registrar()
    {

        $sql = "CALL registraruso(?,?,?,?,?,?,?)";
        $stm = $this->db->prepare($sql);
        $stm->bindParam(1, $this->fecha);
        $stm->bindParam(2, $this->proyecto);
        $stm->bindParam(3, $this->asesoriad);
        $stm->bindParam(4, $this->asesoriai);
        $stm->bindParam(5, $this->descripcion);
        $stm->bindParam(6, $this->gestor);
        $stm->bindParam(7, $this->id);
        $stm->execute();

    }

       public function registrardl()
    {

        $sql = "CALL registrarusodl(?,?,?)";
        $stm = $this->db->prepare($sql);
        $stm->bindParam(1, $this->uso);
        $stm->bindParam(2, $this->laboratorio);
        $stm->bindParam(3, $this->tiempo);
        $stm->execute();

    }

       public function registrardt()
    {

        $sql = "CALL registrarusodt(?,?)";
        $stm = $this->db->prepare($sql);
        $stm->bindParam(1, $this->uso);
        $stm->bindParam(2, $this->talento);
        $stm->execute();

    }
    
     public function consultar(){
    $sql = "CALL consultausoinfra(?)";
    $stm = $this->db->prepare($sql);
    $stm->bindParam(1, $this->gestor);
    $stm->execute();
    return $stm->fetchAll(PDO::FETCH_ASSOC);
   }  

    public function consultardetallelabo(){
    $sql = "CALL consultadetallelabo(?)";
    $stm = $this->db->prepare($sql);
    $stm->bindParam(1, $this->uso);
    $stm->execute();
    return $stm->fetchAll(PDO::FETCH_ASSOC);
   }

     public function consultadetalletalen(){
    $sql = "CALL consultadetalletalen(?)";
    $stm = $this->db->prepare($sql);
    $stm->bindParam(1, $this->uso);
    $stm->execute();
    return $stm->fetchAll(PDO::FETCH_ASSOC);
   }

   public function consultauno()
    {
        $sql = "CALL consultainfrauno(?)";
        $query = $this->db->prepare($sql);
        $query->bindParam(1, $this->id);
        $query->execute();
        return $query->fetch(PDO::FETCH_ASSOC);
    }

     public function modificar()
    {

        $sql = "CALL modificaruso(?,?,?,?)";
        $stm = $this->db->prepare($sql);
        $stm->bindParam(1, $this->idusoinfraestructura);
        $stm->bindParam(2, $this->asesoriad);
        $stm->bindParam(3, $this->asesoriai);
        $stm->bindParam(4, $this->descripcion);
        return $stm->execute();
     
    }

      public function modificarestado()
    {
        $sql = "CALL modificarestadouso(?,?)";
        $stm = $this->db->prepare($sql);
        $stm->bindParam(1, $this->idusoinfraestructura);
        $stm->bindParam(2, $this->estado);
        return $stm->execute();
     
    }


}
       
