<?php
include("conexion.php");
$conexion =new MySQLi($host,$user,$pw,$bd)or die("Problema con el host");
$resultado = mysqli_query($conexion,"SELECT * FROM productos");

while ($fila = mysqli_fetch_array($resultado))
{
$result = mysqli_query($conexion,"SELECT marca FROM distribuidor WHERE id_distribuidor='$fila[id_distribuidor]'");
$row = mysqli_fetch_assoc($result);
$socio=$row['marca'];
echo  $socio;
echo "<br>";
}
?>
