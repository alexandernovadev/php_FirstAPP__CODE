$(document).ready(function(){
   
   $(".tablaconproductos").load("traerproducto.php");
   $("#Protxt_distribuidor").load("llenardistribuidores.php");
   $("#Protxt_lugar").load("llenarlugar.php");
   $("#Editar_Protxt_distribuidor").load("llenardistribuidores.php");
   $("#Editar_Protxt_lugar").load("llenarlugar.php");

   $(".formulario-registro-productos").submit(function (e)
      /*Cuando haga click en el btn del formulario con la clase
      $(".form-registro")*/
      {
         // el identicficador Pro de los inputs son los Input de Productos
         var uno =$('#Protxt_id').val();
         //Guardo las varibles, con .val() le digo que obtenga el valor
         var dos =$('#Protxt_nombre').val();
         var tres =$('#Protxt_precioentrada').val();
         var cuatro =$('#Protxt_preciosalida').val();
         var cinco =$('#Protxt_cantidad').val();
         var seis =$('#Protxt_iva').val();
         var siete =$('#Protxt_fechaingreso').val();
         var ocho =$('#Protxt_fechavencimiento').val();
         var nueve =$('#Protxt_lugar').val();
         var diez =$('#Protxt_estado').val();
         var once =$('#Protxt_distribuidor').val();


         /*
         Esto --> (e.preventDefault();)evita que se haga la petición común,
         es decir evita que serefresque la pagina
         */
         e.preventDefault();

         //Variable tipo JSON que almacena todos los datos
         var parametros = {
            'ide'              : uno,
            'nombre'           : dos,
            'precioentrada'    : tres,
            'preciosalida'     : cuatro,
            'cantidad'         : cinco,
            'iva'              : seis,
            'fechaingreso'     : siete,
            'fechavencimiento' : ocho,
            'lugar'            : nueve,
            'estado'           : diez,
            'distribuidor'     : once
         };

         //realizamos la petición ajax con la función de jquery
         $.ajax({
           type        : 'POST',
            //Tipo de dato, Aqui va POST o GET
           url         : 'vida.php',
            // Url de archovo.php
           data        :  parametros,
            // Esta esla variable JSON donde estan todos los archivos

           success: function (data) {
            /*success me informa que cuando todo se halla echo que hago
            document.getElementById("respuesta").innerHTML = "bien Hecho";*/
            // alert("Se capturo el archivo con éxito");
            $(".tablaconproductos").load("traerproducto.php");
            // Recargo la tabla, trayendo en archivo donde esta la tabla


            $('.mensajeenviado').show();
            /*Muestro un parrado que me informa que todo esta bien. Yo oculte el
            parrafo en el html con hidden*/
               setTimeout(function() {
            /* Con la siguiente funcion le digo que muestre el parrafo solo por 5
               segundo y se valla con efecto fadeout*/
                     $(".mensajeenviado").fadeOut(1000);
                  },5000);
           },
           error: function (r) {
            //document.getElementById(".respuesta").innerHTML = "MAL Hecho";
               alert("Error del servidor");
                  $('.mensajenoenviado').show();
                  /*Muestro un parrado que me informa que todo esta bien. Yo oculte el
                  parrafo en el html con hidden*/
                     setTimeout(function() {
                  /* Con la siguiente funcion le digo que muestre el parrafo solo por 5
                     segundo y se valla con efecto fadeout*/
                           $(".mensajenoenviado").fadeOut(1000);
                        },5000);
            }
         });

   })


   $(".formulario-editar-prodductos").submit(function (e)
      /*Cuando haga click en el btn del formulario con la clase
      $(".form-registro")*/
      {
         // el identicficador Pro de los inputs son los Input de Productos
         var uno =$('#Editar_Protxt_id').val();
         //Guardo las varibles, con .val() le digo que obtenga el valor
         var dos =$('#Editar_Protxt_nombre').val();
         var tres =$('#Editar_Protxt_precioentrada').val();
         var cuatro =$('#Editar_Protxt_preciosalida').val();
         var cinco =$('#Editar_Protxt_cantidad').val();
         var seis =$('#Editar_Protxt_iva').val();
         var siete =$('#Editar_Protxt_fechaingreso').val();
         var ocho =$('#Editar_Protxt_fechavencimiento').val();
         var nueve =$('#Editar_Protxt_lugar').val();
         var diez =$('#Editar_Protxt_estado').val();
         var once =$('#Editar_Protxt_distribuidor').val();


         /*
         Esto --> (e.preventDefault();)evita que se haga la petición común,
         es decir evita que serefresque la pagina
         */
         e.preventDefault();

         //Variable tipo JSON que almacena todos los datos
         var parametros = {
            'ide'              : uno,
            'nombre'           : dos,
            'precioentrada'    : tres,
            'preciosalida'     : cuatro,
            'cantidad'         : cinco,
            'iva'              : seis,
            'fechaingreso'     : siete,
            'fechavencimiento' : ocho,
            'lugar'            : nueve,
            'estado'           : diez,
            'distribuidor'     : once
         };

         //realizamos la petición ajax con la función de jquery
         $.ajax({
           type        : 'POST',
            //Tipo de dato, Aqui va POST o GET
           url         : 'editarproducto.php',
            // Url de archovo.php
           data        :  parametros,
            // Esta esla variable JSON donde estan todos los archivos

            success: function (data) {
            alert("dfsdfsdfsdfsd del servidor");
            /*success me informa que cuando todo se halla echo que hago
            document.getElementById("respuesta").innerHTML = "bien Hecho";*/
            // alert("Se capturo el archivo con éxito");
            $(".tablaconproductos").load("traerproducto.php");
            // Recargo la tabla, trayendo en archivo donde esta la tabla

            },
            error: function (r) {
            //document.getElementById(".respuesta").innerHTML = "MAL Hecho";
               alert("Error del servidor");
            }
         });

   })


});
