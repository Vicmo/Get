
<?php

class mdlgestor
{

    private $db;
    private $documento;
    private $nombres;
    private $apellidos;
    private $correo;
    private $linea;
    private $salario;
    private $nodo;

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


       public function consultalineaa(){

           $sql = "CALL consultalineaa";
           $stm = $this->db->prepare($sql);
           $stm->execute();
           return $stm->fetchAll(PDO::FETCH_ASSOC);

         }


########################### Inicio método consultargestor ###########################

/*------------------------ Método para mostrar los gestores por nodo -----------------------*/

         public function consultargestor(){

           $sql = "CALL consultargestor(?)";
           $stm = $this->db->prepare($sql);
           $stm->bindParam(1, $this->idnodo);
           $stm->execute();
           return $stm->fetchAll(PDO::FETCH_ASSOC);

         }

############################ Fin método consultargestor ############################


         public function registrar(){

         $sql = "CALL registrargestor(?,?,?)";
         $stm = $this->db->prepare($sql);
         $stm->bindParam(1, $this->documento);
         $stm->bindParam(2, $this->linea);
         $stm->bindParam(3, $this->salario);
         $stm->execute();

     }

   public function modificargestor(){

      $sql = "CALL modificargestor(?,?,?)";
       $stm = $this->db->prepare($sql);
       $stm->bindParam(1, $this->idpersona);
       $stm->bindParam(2, $this->linea);
       $stm->bindParam(3, $this->salario);
       $stm->execute();

   }

      public function verg(){

       $sql = "CALL vergestor(?)";
       $stm = $this->db->prepare($sql);
       $stm->bindParam(1, $this->idpersona);
       $stm->execute();
       return $stm->fetch(PDO::FETCH_ASSOC);

     }

      public function modificarestadog(){

        $sql = "CALL modificarestadogestor(?,?)";
        $stm = $this->db->prepare($sql);
        $stm->bindParam(1, $this->idpersona);
        $stm->bindParam(2, $this->estado);
        return $stm->execute();

    }

      public function vergc(){

       $sql = "CALL consultacorreog(?)";
       $stm = $this->db->prepare($sql);
       $stm->bindParam(1, $this->correo);
       $stm->execute();
       return $stm->fetch(PDO::FETCH_ASSOC);

   }

      public function consultauso(){

           $sql = "CALL consultalineauso(?)";
           $stm = $this->db->prepare($sql);
           $stm->bindParam(1, $this->proyecto);
           $stm->execute();
           return $stm->fetch(PDO::FETCH_ASSOC);

         }

         public function consultalinea(){

           $sql = "CALL consultalinea(?)";
           $stm = $this->db->prepare($sql);
           $stm->bindParam(1, $this->idgestor);
           $stm->execute();
           return $stm->fetch(PDO::FETCH_ASSOC);

         }


         public function consultagp(){

           $sql = "CALL consultagp(?)";
           $stm = $this->db->prepare($sql);
           $stm->bindParam(1, $this->gestor);
           $stm->execute();
           return $stm->fetchAll(PDO::FETCH_ASSOC);

         }

}
