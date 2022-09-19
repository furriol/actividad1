<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<label for="start">Calcula de manera exacta tu edad:</label>

<form action="" method="POST">
<input type="date" id="start" name="trip-start"
       value=""
       min="" max="">
<input type="submit" name="calcula" value="calcula">
<input type="submit" name="borra" value="borra">
</form>

<?php

include ("convertir.php");

//recoge la fecha seleccionada


if(isset($_POST["calcula"])){

$seleccion=$_POST["trip-start"];

//convierte a formato unix
$unix=strtotime($seleccion);


//Asigna la zona horaria
date_default_timezone_set("Europe/Madrid");
$hoy=date("U");



$diferencia=$hoy-$unix;

//Ya tenemos los segundos unix que han trascurrido entre dos fechas



$resultado=secondsToTime($diferencia);



echo $resultado['y'] . " años <br>";
echo $resultado['d'] . " dias <br>";
echo $resultado['h'] . " horas <br>";
echo $resultado['m'] . " minutos <br>";
echo $resultado['s'] . " segundos <br>";
}

if(isset($_POST["borra"])){
    echo "";
}

?>

</body>
</html>