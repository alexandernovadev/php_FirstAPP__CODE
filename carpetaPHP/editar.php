<?php
   include ("conexion.php"); //Traigo lo parametros de conexion
   //Guardo las variables que recibo del metodo AJAX
   $uno=$_POST['ide'];
   $dos=$_POST['nombre'];
   $tres=$_POST['precioentrada'];
   $cuatro=$_POST['preciosalida'];
   $cinco=$_POST['cantidad'];
   $seis=$_POST['iva'];
   $siete=$_POST['fechaingreso'];
   $ocho=$_POST['fechavencimiento'];
   $nueve=$_POST['lugar'];
   $diez=$_POST['estado'];
   $once=$_POST['distribuidor'];

   $conexion =new MySQLi($host,$user,$pw,$bd)or die("Problema con el host");


$resultado = mysqli_query($conexion,"SELECT * FROM productos");
 while ($fila = mysqli_fetch_array($resultado)) //Recorro todos los proyectos y los asigno a la variable $fila
 {

$result = mysqli_query($conexion,"SELECT marca FROM distribuidor WHERE id_distribuidor='$fila[id_distribuidor]'");
$row = mysqli_fetch_assoc($result);//Como es un array toca con este metodo"mysqli_fetch_assoc($result)" para almacenar la Variable
$distribuidor=$row['marca'];//Guardo la Variable del array a otra, para que no me salga error STRING algo...

$resulta = mysqli_query($conexion,"SELECT nombre_ubicacion FROM lugar WHERE id_lugar='$fila[id_lugar]'");
$row = mysqli_fetch_assoc($resulta);
$lugar=$row['nombre_ubicacion'];
}


//////FALTA EDIATRARARAR


   mysqli_query($conexion,"UPDATE productos SET
   detalle='".$dos."',
   precio_entrada='".$tres."',
   precio_salida='".$cuatro."',
   cantidad='".$cinco."',
   iva='".$seis."',
   fecha_ingreso='".$siete."',
   fecha_vencimiento='".$ocho."',
   id_lugar	='".$nueve."',
   estado='".$diez."',
   id_distribuidor='".$once."'

   WHERE id_productos='".$uno."'");
?>
