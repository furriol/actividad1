
<?php

$db_host="localhost";
$db_nombre="pruebass";
$db_usuario="root";
$db_contra="";



function conectar($db_host, $db_nombre, $db_usuario, $db_contra) {

    $conexion=mysqli_connect($db_host,$db_usuario,$db_contra,$db_nombre);

    if (!$conexion) {
        throw new Exception('Conexión fallida');
    }
    return "Conexión realizada correctamente";
}

try {
    echo conectar($db_host, $db_nombre, $db_usuario, $db_contra);
    
} catch (Exception $e) {
    echo 'Excepción capturada: ',  $e->getMessage(), "\n";
    echo "La conexión ha fallado";
    echo mysqli_connect_error();
}

// Continuar la ejecución
echo 'Hola Mundo\n';

