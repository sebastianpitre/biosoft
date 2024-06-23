<?php 
include "../config/bd.php";

$nombre_comun=$_POST['nombre_comun'];
$nombre_cientifico=$_POST['nombre_cientifico'];
$descripcion=$_POST['descripcion'];
$foto=$_FILES['foto'];

$foto=addslashes(file_get_contents($foto['tmp_name']));

$query=insertar($nombre_comun,$nombre_cientifico,$descripcion,$foto);

header('location:../index.php');
