<?php

require_once('../modelo/Categorias.php');

$Categorias = new Categorias();

echo $Categorias->getCategorias();