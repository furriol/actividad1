<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
        <label>Introduce el libro que deseeas buscar</label>
        <input type="text" name="busqueda">
        <input type="submit">
    </form>


    <?php

$db_host="localhost";
$db_nombre="pruebas";
$db_usuario="root";
$db_contra="";

$busqueda=$_POST['busqueda'];

$conexion=mysqli_connect($db_host,$db_usuario,$db_contra,$db_nombre);


$consulta="SELECT * FROM hoja1 WHERE Nombre_libro LIKE '%$busqueda%'";



$resultados=mysqli_query($conexion, $consulta);
?>

<form action="actualizar.php" method="post">
<?php
while($fila=mysqli_fetch_array($resultados, MYSQLI_ASSOC)){
    foreach ($fila as $key=>$valor){
        echo $fila[$key] . "<br>";
        echo "<input type='text' name='$key' value='" . $fila[$key] . "'> <br>";
    }
}
?>
<input type="submit" name="actualiza" value="Actualiza">
</form>
<?php

?>
</body>
</html>
