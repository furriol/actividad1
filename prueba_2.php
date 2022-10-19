
<?php

$db_host="localhost";
$db_nombre="pruebass";
$db_usuario="root";
$db_contra="";

if (!$conexion=mysqli_connect($db_host,$db_usuario,$db_contra,$db_nombre)) {
        throw new Exception('Conexión fallida');
    }
    return "Conexión realizada correctamente";


try {
   
    mysqli_connect($db_host,$db_usuario,$db_contra,$db_nombre);
    
} catch (Exception $e) {
    echo 'Excepción capturada: ',  $e->getMessage(), "\n";
    
}

// Continuar la ejecución
echo 'Hola Mundo\n';

