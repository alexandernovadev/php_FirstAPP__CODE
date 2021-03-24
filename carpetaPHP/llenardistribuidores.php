<?php
include("conexion.php");
$conexion =new MySQLi($host,$user,$pw,$bd)or die("Problema con el host");
$resultado = mysqli_query($conexion,"SELECT * FROM distribuidor");


echo "<option disabled selected>Selecione distribuidor</option>";
while ($fila = mysqli_fetch_array($resultado))
{
echo "<option value='$fila[id_distribuidor]'>$fila[marca]</option>";
}
?>
