<?php

class Controller
{
    
    public $db = null;

  
    public $model = null;

    function __construct()
    {
        $this->openDatabaseConnection();
        
    }

    private function openDatabaseConnection()
    {
        $options = array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ, PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING);
        $this->db = new PDO(DB_TYPE . ':host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=' . DB_CHARSET, DB_USER, DB_PASS, $options);
    }

    public function loadModel($nombreModel)

    {
        $this->openDatabaseConnection();
        require APP . 'model/'.$nombreModel.'.php';
        return new $nombreModel($this->db);
    }
}
