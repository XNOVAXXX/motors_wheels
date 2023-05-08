<?php

require_once('../../configuracion/Conexion.php');

class Productos extends Conexion {

    public function __construct() {
        $this->db = parent::__construct();
    }

    public function getProductos(){
        $statement = $this->db->prepare("SELECT c.ID_CATEGORIA, c.CATEGORIA, c.IMAGEN AS IMAGEN_CATEGORIA, p.ID_PRODUCTO, 
        p.NOMBRE, p.PRECIO, P.STOCK, p.IMAGEN AS IMAGEN_PRODUCTO 
        FROM productos p 
        INNER JOIN categorias c ON p.ID_CATEGORIA = c.ID_CATEGORIA;
        ");
        $statement->execute();
        echo json_encode($statement->fetchAll(PDO::FETCH_ASSOC));
    }

}