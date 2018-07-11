
<?php

class mdlcostosadministrativos
{

    private $db;
    private $idcostos;
    private $nombre;
    private $valor;


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

    /*=============================================================================
    =            consulta a la db para costos administrativos por nodo            =
    =============================================================================*/

       public function QueryCostosAdministrativosPorNodo()
       {
         $sql = "CALL costosadministrativospornodo(?)";
            $stm = $this->db->prepare($sql);
            $stm->bindParam(1, $this->nodo);
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_ASSOC);
       }

       /*=====  End of consulta a la db para costos administrativos por nodo  ======*/


    public function consultar()
    {
      $sql = "CALL consultarcostosadministrativos(?)";
     $stm = $this->db->prepare($sql);
     $stm->bindParam(1, $this->idnodo);
     $stm->execute();
     return $stm->fetchAll(PDO::FETCH_ASSOC);

   }

   public function uno()
   {
       $sql = "CALL consultacostosuno(?)";
       $stm = $this->db->prepare($sql);
       $stm->bindParam(1, $this->idcostos);
       $stm->execute();
       return $stm->fetch(PDO::FETCH_ASSOC);

   }

     public function modificar()
    {

        $sql = "CALL modificarcostos(?,?,?)";
        $stm = $this->db->prepare($sql);
        $stm->bindParam(1, $this->idcostoadministrativo);
        $stm->bindParam(2, $this->nombre);
        $stm->bindParam(3, $this->valor);
        return $stm->execute();

    }


}
