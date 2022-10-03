<?php

$semana=array("Lunes", "Martes", "Miércoles");
sort($semana);

for($i=0;$i<3;$i++){
    echo $semana[$i] . "<br>";
}