<?php

require_once('../modelo/Productos.php');

$Productos = new Productos();

$Carrito = $_POST['carrito'];

echo json_encode($Carrito);