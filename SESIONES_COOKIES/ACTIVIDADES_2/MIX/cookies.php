<?php

//Guardan datos e información de los usuarios en el navegador y el servidor
//Rastrear que usuarios vuelven a la web
//almacenan los datos de sesión para cuando te logueas

//Desventajas: cantidad limitada de datos. Se tiene que pasar al servidor cada vez que arranca la página.

//Cookie: es un fichero que se almacena en el ordenadrod del usuario que visita la web con el fin de recordar datos  o rastrear cierta informacion o comportamiento del mismo en la web


//Crear cookies

//setcookie("nombre", "valor que solo puede ser texto", caducidad, ruta, dominio)

setcookie("micookie","valor de mi galleta");

//cookie con expiración

setcookie("cookie_caduca","valor de mi cookie 1 año", time()+(60*60*24*365));

?>

<a href="ver_cookies.php">Ver cookies</a>

