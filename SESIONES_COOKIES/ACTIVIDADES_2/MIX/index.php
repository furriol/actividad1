<?php

//sirven para persisirtir la información mientras el usuario está navegando.
//sesión = período de tiempo durante el cual el usuario ve una serie de páginas determnina
//sin necesidad de identificarse cada vez, sino que hay unos datos del usuario que están persisiteniendo en la misma

//hasta que se cierre sesión o el navgeador

//Sesión: almacenar y persisitir datos del usuario mientras que navega en un sitio web hasta que cierra sesión o cierra el navegador

//los datos se alamacenan en el servidor web.

//Iniciar la sesión

session_start();

//VARIABLE LOCAL
$variable_normal="soy una cadena de texto";

//Una sesión es una variable super global que se crea así
//VARIABLE DE SESIÓN, se puede utilizar en cualquier parte del dominio
$_SESSION['variable_persistente']="HOLA SOY UNA SESIÓIN ACTIVA";

echo $variable_normal;

echo $_SESSION['variable_persistente'];


