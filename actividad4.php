<?php

$var1=8;
$var2="8";

if($var1===$var2){

    echo "Las variables son iguales";
}else{

    echo "Las variables no son iguales";
}

echo "Esta es la línea " . __LINE__ . "<br>";

$var1= 7;
$var2= 2;

echo $var1 % $var2; 

//¿Por qué el programa arroja que las variables no son iguales?