<?php

$db_host="localhost";
$db_nombre="pruebass";
$db_usuario="root";
$db_contra="";

$conexion=mysqli_connect($db_host,$db_usuario,$db_contra,$db_nombre);

if(!$conexion){
    echo "Error al conectar";
}else{
    echo "Conexión satisfactoria";
}



mysqli_close($conexion);