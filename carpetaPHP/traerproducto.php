<?php
include("conexion.php");
$conexion =new MySQLi($host,$user,$pw,$bd)or die("Problema con el host");
$resultado = mysqli_query($conexion,"SELECT * FROM productos"); //Consulta select para seleccionar datos

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

 echo "<tr>";
 echo "<td id='myBtn'>$fila[id_productos]</td>
 <td>$fila[detalle]</td>
 <td>$fila[precio_entrada]</td>
 <td>$fila[precio_salida]</td>
 <td>$fila[cantidad]</td>
 <td>$fila[iva]</td>
 <td>$fila[fecha_ingreso]</td>
 <td>$fila[fecha_vencimiento]</td>
 <td>$lugar</td>
 <td>$fila[estado]</td>
 <td>$distribuidor</td>";
echo "<td width='60px'><a class='mero'>444</a></td>";
echo "<td width='60px'><button onclick='eliminarproducto(this)' id='$fila[id_productos],$fila[detalle]' class='w3-hover-red w3-btn' type='button'><i class='fa fa-close w3-padding'></i></button></td>";
 echo "<tr>";
}
//EN EL ID PASO PARAMETROS CON UNA COMA---> ID,detalle. Para que en JAVASCRIPT utliza el meto split(",");
// Con ese metodo separo la informacion de comas y hace una array.
//Si necesito la el id serio la posicion 0
// Si necesito el detalle sera la posicion 1
// Y asi sucesivamente, de acuerdo al orden en que yo coloque la informacion

//this digo este boton es unico en la fila
//Cada boton es diferente
 ?>
