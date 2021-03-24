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
   mysqli_query($conexion,"INSERT INTO productos VALUES
   ('".$uno."',
    '".$dos."',
    '".$tres."',
    '".$cuatro."',
    '".$cinco."',
    '".$seis."',
    '".$siete."',
    '".$ocho."',
    '".$nueve."',
    '".$diez."',
    '".$once."')");
?>
