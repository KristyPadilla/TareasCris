<?php
include_once('conexion.php');
$url_id= $_GET['id'];
mysql_query("DELETE FROM alumnos WHERE id =  $url_id");
header('Location:alumnos.php');
?>