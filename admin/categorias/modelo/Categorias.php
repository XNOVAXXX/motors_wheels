<?php

require_once('../../configuracion/Conexion.php');

class Categorias extends Conexion {

    public function __construct(){
        $this->db = parent::__construct();
    }

    public function getCategorias(){
        $statement = $this->db->prepare("SELECT * FROM categorias");
        $statement->execute();
        return json_encode($statement->fetchAll());
    }
    
}
