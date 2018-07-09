
<?php

class mdlnodo
{

    private $db;
    private $idnodo;
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


       public function consultarnodost()
       {
           $sql = "CALL consultarnodos";
           $stm = $this->db->prepare($sql);
           $stm->execute();
           return $stm->fetchAll(PDO::FETCH_ASSOC);
         }

         public function registrar(){
           $sql = "CALL registronodo(?,?,?)";
           $stm = $this->db->prepare($sql);
           $stm->bindParam(1, $this->ciudad);
           $stm->bindParam(2, $this->nombre);
           $stm->bindParam(3, $this->direccion);
           $stm->execute();
         }

         public function vernodo(){
           $sql = "CALL vernodo(?)";
           $stm = $this->db->prepare($sql);
           $stm->bindParam(1, $this->idnodo);
           $stm->execute();
           return $stm->fetch(PDO::FETCH_ASSOC);
         }

  ################ Inicio método lineasNodo ################
  /*-------------------- Ejecuta el procedimiento almacenado que muestra las líneas tecnológicas del nodo --------------------*/

         // public function lineasNodo(){
         //   $sql = "CALL lineasnodo(?)";
         //   $stm = $this->db->prepare($sql);
         //   $stm->bindParam(1, $this->idnodo);
         //   $stm->execute();
         //   return $stm->fetchAll(PDO::FETCH_ASSOC);
         // }

  ################ Fin método lineasNodo ################


         public function consultadepto(){
           $sql = "CALL consultadepto";
           $stm = $this->db->prepare($sql);
           $stm->execute();
           return $stm->fetchAll(PDO::FETCH_ASSOC);
         }

         public function modificarnodo(){
           $sql = "CALL modificarnodo(?,?,?,?)";
            $stm = $this->db->prepare($sql);
            $stm->bindParam(1, $this->idnodo);
            $stm->bindParam(2, $this->nombre);
            $stm->bindParam(3, $this->direccion);
            $stm->bindParam(4, $this->ciudad);
            $stm->execute();
         }

         // public function consultaciudad(){
         //   $sql = "CALL consultaciudad";
         //   $stm = $this->db->prepare($sql);
         //   $stm->execute();
         //   return $stm->fetchAll(PDO::FETCH_ASSOC);
         // }

         public function consultarnodos(){
          $sql = "SELECT nodo.idnodo, concat('Tecnoparque nodo ', nodo.nombrenodo, ' (', departamento.nombre, ') ') as nodo FROM nodo
        JOIN ciudad on nodo.ciudad = ciudad.idciudad
        JOIN departamento on ciudad.departamento = departamento.iddepartamento";
                 $stm = $this->db->prepare($sql);
                 $stm->execute();
                 return $stm->fetchAll(PDO::FETCH_ASSOC);
          }

          public function nodos()
          {
            $sql = "CALL nodoadmin(?)";
             $stm = $this->db->prepare($sql);
             $stm->bindParam(1, $this->idnodo);
             $stm->execute();
             return $stm->fetch(PDO::FETCH_ASSOC);
          }

          public function dinamizadorpornodo()
          {
            $sql = "CALL dinamizadorpornodo(?)";
             $stm = $this->db->prepare($sql);
             $stm->bindParam(1, $this->idnodo);
             $stm->execute();
             return $stm->fetchAll(PDO::FETCH_ASSOC);

          }



}
