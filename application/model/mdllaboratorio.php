
<?php

class mdllaboratorio
{

    private $db;
    private $idlaboratorio;
    private $nombre;
    private $linea;
    private $participacioncostos;
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



    ############################## Inicio método consultar ##############################


      /*--------------- Ejecuta el procedimiento almacenado consultarlaboratorio, que muestra los Laboratorios del nodo -----------------*/

    public function consultar()
    {
      $sql = "CALL consultarlaboratorio(?)";
     $stm = $this->db->prepare($sql);
     $stm->bindParam(1, $this->idnodo);
     $stm->execute();
     return $stm->fetchAll(PDO::FETCH_ASSOC);

   }
   ############################## Fin método consultar ##############################

   ############################## Inicio método ver ##############################

    /*--------------- Ejecuta el procedimiento almacenado verlaboratorio, que muestra el detalle del laboratorio -----------------*/
   public function uno()
   {
       $sql = "CALL verlaboratorio(?)";
       $stm = $this->db->prepare($sql);
       $stm->bindParam(1, $this->idlaboratorio);
       $stm->execute();
       return $stm->fetch(PDO::FETCH_ASSOC);

   }
   ############################## Fin método ver ##############################



   ############################## Inicio método modificar ##############################

   /*--------------- Ejecuta el procedimiento almacenado modificarlaboratorio el cual guarda los cambios realizados sobre el laboratorio -----------------*/
     public function modificar()
    {

        $sql = "CALL modificarlaboratorio(?,?,?,?)";
        $stm = $this->db->prepare($sql);
        $stm->bindParam(1, $this->idlaboratorio);
        $stm->bindParam(2, $this->nombre);
        $stm->bindParam(3, $this->linea);
        $stm->bindParam(4, $this->participacioncostos);
        return $stm->execute();

    }
    ############################## Fin método modificar ##############################

    ############################## Inicio método registrar ##############################

    /*--------------- Ejecuta el procedimiento almacenado para guardar el laboratorio en la base de datos -----------------*/
     public function registrar()
   {

       $sql = "CALL registrarlaboratorio(?,?,?,?)";
       $stm = $this->db->prepare($sql);
       $stm->bindParam(1, $this->linea);
       $stm->bindParam(2, $this->nombre);
       $stm->bindParam(3, $this->participacioncostos);
       $stm->bindParam(4, $this->idnodo);
       return $stm->execute();

   }
   ############################## Fin método registrar ##############################


   ############################## Inicio método inhabilitarlab ##############################
   /*--------------- Ejecuta el procedimiento almacenado para cambiar el estado del laboratorio -----------------*/
   public function inhabilitarlab()
   {

       $sql = "CALL inhabilitarlab(?,?)";
       $stm = $this->db->prepare($sql);
       $stm->bindParam(1, $this->idlaboratorio);
       $stm->bindParam(2, $this->estado);
       return $stm->execute();

   }
   ############################## Fin método inhabilitarlab ##############################
}
