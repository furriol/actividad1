<?php

$a=[0,1,2,3,4,5,6,7,8,9,10];

function dividir($array){
    return ($array * 0.5);
}

$b=array_map("dividir",$a);

foreach($b as $clave=>$valor){
   echo "El número $clave es: " . $valor . "<br>";
}
