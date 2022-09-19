<?php

$horas=46;

if($horas<=40){

    echo "Tu salario es: " . $horas*10;
}
if($horas>40){

    $extra=$horas-40;
    echo "Tu salario es: " . (400)+($extra*12);
}



