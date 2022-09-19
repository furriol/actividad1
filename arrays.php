<?php

//arrays o matrices (indexados o asociativos)

$semana[]="Lunes";
$semana[]="Martes";
$semana[]="Miércoles";
$semana[]="Jueves";
$semana[]="Viernes";

//$semana=array("Lunes", "Martes", "Miércoles");

echo $semana[0];


//array asociativo

$datos=array(

    "Nombre"=>"Alejandro",
    "Apellido"=>"Furriol"

);

echo $datos["Nombre"];

//para rescatar todos los datos del array

//foreach permite recorrer arrays asociativos

foreach($datos as $clave=>$valor){
    echo "A $clave le corresponde $valor <br>";
}


