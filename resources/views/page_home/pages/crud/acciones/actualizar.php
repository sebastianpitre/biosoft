<?php 
#capturar los datos formulario
$id=$_POST['id'];
$nombre_comun=$_POST['nombre_comun'];
$nombre_cientifico=$_POST['nombre_cientifico'];
$descripcion=$_POST['descripcion'];
$foto=$_FILES['foto'];
include "../config/bd.php";
if($foto['size']==0){
    $query=actualizarSinFoto($id,$nombre_comun,$nombre_cientifico,$descripcion);
}else{
    $foto=addslashes(file_get_contents($foto['tmp_name']));
    $query=actualizar($id,$nombre_comun,$nombre_cientifico,$descripcion,$foto);
}

header("location:../editar.php?id=$id");