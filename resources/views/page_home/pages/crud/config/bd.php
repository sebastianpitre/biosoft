<?php 

function conexion(){
    $conexion=mysqli_connect('localhost','root','','crud_bio');
    return $conexion;
}
function listar(){
    $sql="SELECT * FROM alumno";
    $query=mysqli_query(conexion(),$sql);
    return $query;
}
function insertar($nombre_comun,$nombre_cientifico,$descripcion,$foto){
    $sql="INSERT INTO alumno(nombre_comun,nombre_cientifico,descripcion,foto) VAlues('$nombre_comun','$nombre_cientifico','$descripcion','$foto')";
    $query=mysqli_query(conexion(),$sql);
    return $query;
}
function eliminar($id){
    $sql="DELETE from alumno WHERE id=$id";
    $query=mysqli_query(conexion(),$sql);
    return $query;
}

function ListarunAlumno($id){
    $sql="SELECT * FROM alumno WHERE id=$id";
    $query=mysqli_query(conexion(),$sql);
    return mysqli_fetch_assoc($query);
}
function actualizar($id,$nombre_comun,$nombre_cientifico,$descripcion,$foto){
    $sql="UPDATE  alumno set nombre_comun='$nombre_comun',nombre_cientifico='$nombre_cientifico',descripcion='$descripcion',foto='$foto' WHERE id=$id";
    $query=mysqli_query(conexion(),$sql);
    return $query;
}

function actualizarSinFoto($id,$nombre_comun,$nombre_cientifico,$descripcion){
    $sql="UPDATE  alumno set nombre_comun='$nombre_comun',nombre_cientifico='$nombre_cientifico',descripcion='$descripcion' WHERE id=$id";
    $query=mysqli_query(conexion(),$sql);
    return $query;
}