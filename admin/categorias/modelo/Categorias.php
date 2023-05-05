<?php

require_once('../../configuracion/Conexion.php');

class Categorias extends Conexion {

    public function __construct(){
        $this->db = parent::__construct();
    }

    public function getCategorias(){
        $statement = $this->db->prepare("SELECT * FROM categorias");
        $statement->execute();
        echo json_encode($statement->fetchAll());
    }

    public function getCategoria($Id){
        $statement = $this->db->prepare("SELECT * FROM categorias WHERE ID_CATEGORIA = :Id");
        $statement->execute(array(':Id' => $Id));
        echo json_encode($statement->fetch());
    }

    public function registrarCategoria($Nombre, $Source, $Tipo){
        $Foto = $Nombre.'.png';

        move_uploaded_file($Source, '../imagenes/'.$Foto);

        $statement = $this->db->prepare("INSERT INTO categorias (CATEGORIA, IMAGEN) VALUES (:Nombre, :Foto)");
        $statement->execute(array(':Nombre' => $Nombre, ':Foto' => $Foto));
        
        echo json_encode(array('status' => 'success', 'message' => 'Categoría Registrada'));
    }

    public function editarCategoria($Id, $Nombre, $Source, $Tipo){
        $Foto = $Nombre.'.png';

        if(file_exists('../imagenes/'.$Foto)){
            unlink('../imagenes/'.$Foto);
        }
        move_uploaded_file($Source, '../imagenes/'.$Foto);

        $statement = $this->db->prepare("UPDATE categorias SET CATEGORIA = :Nombre, IMAGEN = :Foto WHERE ID_CATEGORIA = :Id");
        $statement->execute(array(':Id' => $Id, ':Nombre' => $Nombre, ':Foto' => $Foto));
        
        echo json_encode(array('status' => 'success', 'message' => 'Categoría Actualizada'));
    }
    
}
