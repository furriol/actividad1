<?php

$a=true;
$b=false;

$total= $a and $b;  

if($total==true){

        echo "Correcto";

}else{

    echo "Incorrecto";

}

// a and b es false (1x0 = 0 (false)), sale correcto porque el igual tiene preferencia sobre el and. Tienen que ver porque tienen preferencia