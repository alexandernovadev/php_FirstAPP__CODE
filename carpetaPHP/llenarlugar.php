 <?php
include("conexion.php");
$conexion =new MySQLi($host,$user,$pw,$bd)or die("Problema con el host");
$resultado = mysqli_query($conexion,"SELECT * FROM lugar");

echo "<option disabled selected>Selecione lugar</option>";
while ($fila = mysqli_fetch_array($resultado)) //Llenando un option condatos de lugar de la base de datos
{
echo "<option value='$fila[id_lugar]'>$fila[nombre_ubicacion]</option>";
}
?>
