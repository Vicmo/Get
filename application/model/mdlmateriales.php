
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


########################## Inicio método consultar ##########################

  /*------------------- Consulta todos los materiales por nodo ----------------------*/
    public function consultar()
    {

      $sql = "CALL consultarmaterial(?)";
     $stm = $this->db->prepare($sql);
     $stm->bindParam(1, $this->idnodo);
     $stm->execute();
     return $stm->fetchAll(PDO::FETCH_ASSOC);

   }
########################## Fin método consultar ##########################


########################## Inicio método consultartipomaterial ##########################

  /*------------------- Consulta los tipos de material ----------------------*/

  public function consultartipomaterial()
    {
      $sql = "CALL consultatipomaterial";
     $stm = $this->db->prepare($sql);
     $stm->execute();
     return $stm->fetchAll(PDO::FETCH_ASSOC);

   }
########################## Fin método consultartipomaterial ##########################

########################## Inicio método uno ##########################

  /*------------------- Muestra el material según su idmaterial ----------------------*/

   public function uno()
   {
       $sql = "CALL vermaterial(?)";
       $stm = $this->db->prepare($sql);
       $stm->bindParam(1, $this->id);
       $stm->execute();
       return $stm->fetch(PDO::FETCH_ASSOC);

   }
########################## Fin método uno ##########################

########################## Inicio método modificar ##########################
/*------------------- Ejecuta el procedimiento almacenado que modifica el material según el idmaterial ----------------------*/

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
########################## Fin método modificar ##########################


########################## Inicio método registrar ##########################

  /*------------------- Consulta los tipos de material ----------------------*/

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
########################## Fin método registrar ##########################


}
