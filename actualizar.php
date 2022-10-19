<?php
$db_host="localhost";
$db_nombre="pruebas";
$db_usuario="root";
$db_contra="";

//$busqueda=$_POST['busqueda'];

$conexion=mysqli_connect($db_host,$db_usuario,$db_contra,$db_nombre);

$codigo=$_POST['Cod_libro'];
$editorial=$_POST['Editorial'];




if(isset($_POST['actualiza'])){
    $actualiza="UPDATE hoja1 SET Editorial='$editorial' WHERE Cod_libro='$codigo'";
    mysqli_query($conexion,$actualiza);
}