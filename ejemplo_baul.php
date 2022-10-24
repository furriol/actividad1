<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="POST">
<label>Nombre</label>
<input type="text" name="nombre">

<label>Mensaje</label>
<textarea name="mensaje" rows="5"></textarea>

<input type="submit" value="Enviar">
</form>

<?php

$db_host="localhost";
$db_nombre="pruebas";
$db_usuario="root";
$db_contra="";

$conexion=mysqli_connect($db_host,$db_usuario,$db_contra,$db_nombre);

$nombre= $_POST['nombre'];
$mensaje= $_POST['mensaje'];

// Compruebe si este usuario ya tiene un mensaje
mysqli_query($conn, "SELECT * from libros where Nombre_libro = $nombre");

?>
    
</body>
</html>