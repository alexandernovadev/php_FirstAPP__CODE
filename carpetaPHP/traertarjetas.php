<?php
include("conexion.php");
$conexion =new MySQLi($host,$user,$pw,$bd)or die("Problema con el host");
$resultado = mysqli_query($conexion,"SELECT * FROM productos"); //Consulta select para seleccionar datos
$contando=0;
 while ($fila = mysqli_fetch_array($resultado)) //Recorro todos los proyectos y los asigno a la variable $fila
 {//En la parte de abajo Al frente de la variable fila coloco unos corchetes asi []
 // Dentro de esos corchetes especifico el nombre que quiero que coloque
   //Esto depende del nombre de la fila en la Base de datos
   //En mi base de datos tengo id, nombreproyecto y nombreintegrantes.

//En las lineas siguientes comparo el numero id de distribuidor para despues traer el nombre y colocarlo
//Antes salia el numero id y se colocaba en la tabla, pero no sabia que distribuidor o lugar era solo aparecia
//un numero, por eso es que comparo el id busco en la tabla y traigo el nombre
$result = mysqli_query($conexion,"SELECT marca FROM distribuidor WHERE id_distribuidor='$fila[id_distribuidor]'");
$row = mysqli_fetch_assoc($result);//Como es un array toca con este metodo"mysqli_fetch_assoc($result)" para almacenar la Variable
$distribuidor=$row['marca'];//Guardo la Variable del array a otra, para que no me salga error STRING algo...

$resulta = mysqli_query($conexion,"SELECT nombre_ubicacion FROM lugar WHERE id_lugar='$fila[id_lugar]'");
$row = mysqli_fetch_assoc($resulta);
$lugar=$row['nombre_ubicacion'];

 // echo "<tr>";
 // echo "<td id='myBtn'>$fila[id_productos]</td>
 // <td>$fila[detalle]</td>
 // <td>$fila[precio_entrada]</td>
 // <td>$fila[precio_salida]</td>
 // <td>$fila[cantidad]</td>
 // <td>$fila[iva]</td>
 // <td>$fila[fecha_ingreso]</td>
 // <td>$fila[fecha_vencimiento]</td>
 // <td>$lugar</td>
 // <td>$fila[estado]</td>
 // <td>$distribuidor</td>";
 // echo "<tr>";


$contando=$contando+1;
echo "<div class='w3-container w3-quarter'>";
echo "<div class='w3-card-4 w3-margin'>";
echo "<header class='w3-container w3-light-grey w3-center'>";
echo "<h6 id='cero'>$fila[detalle]</h6>";
echo "</header>";


echo "<div class='w3-container'>";
echo "<img src='img_avatar3.png' alt='Avatar' class='w3-left w3-circle w3-margin' style='width:80px'>";
echo "<p class='w3-center'>Cantidad<span class='w3-badge w3-margin w3-center'>$fila[cantidad]</span></p>";
echo "</div>";

echo "<button class='w3-button w3-block w3-red btnsinpading'>";
echo "<h6 class='w3-left'>";
echo "Precio Entrada";
echo "</h6>";
echo "<span class='w3-badge w3-right w3-margin'>$fila[precio_entrada]</span>";
echo "</button>";


echo "<button class='w3-button w3-block w3-green btnsinpading'>";
echo "<h6 class='w3-left'>";
echo "Precio Entrada";
echo "</h6>";
echo "<span class='w3-badge w3-right w3-margin'>$fila[precio_salida]</span>";
echo "</button>";


echo "<button class='w3-button w3-block w3-blue  w3-border-black btnsinpading'>";
echo "<h6 class='w3-left'>";
echo "Distribuidor";
echo "</h6>";
echo "<h6 class='w3-right w3-square margindistribuidor w3-round-xlarge w3-black'>";
echo "&nbsp;$distribuidor&nbsp; ";
echo "</h6>";
echo "</button>";


echo "<button class='w3-button w3-block w3-dark-grey btnsinpading' onclick='abrirtabla(this)' id='$fila[detalle]'>";//Coloeque de id el nombre del producto
//Para que al hacer click me diga el que tarjeta est
// echo "<h6>";
echo "ver mas $contando";
// echo "</h6>";
echo "</button>";
echo "</div>";
echo "</div>";
}

 ?>
