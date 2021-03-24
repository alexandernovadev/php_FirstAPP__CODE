<?php
$idborrar=$_POST['borrar'];

include ("conexion.php");

$conexion =new MySQLi($host,$user,$pw,$bd)or die("Problema con el host");
$resultado = mysqli_query(
  $conexion,
  "DELETE FROM productos WHERE id_productos='".$idborrar."' "
  ); 
//Consulta select para seleccionar datos
?>
