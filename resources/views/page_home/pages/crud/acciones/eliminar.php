<?php

$id=$_GET['id'];
include "../config/bd.php";
$query=eliminar($id);
header('location:../index.php');