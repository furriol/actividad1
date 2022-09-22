<?php

// Crea un programa que calcula la edad exacta de una persona a partir de la fecha 
// actual (años, meses, días, horas y segundos). Para ello ayúdate de un 
// formulario.


date_default_timezone_set('Europe/Madrid');

if (isset($_POST["submit"]) && !empty($_POST["submit"]) && isset($_POST['nacimiento'])) {
    $ahora = date('Y-m-d-H-i-s');

$nacimiento = $_POST['nacimiento'];


$matNacimiento = preg_split('[-]', $nacimiento);
$matAhora = preg_split('[-]', $ahora);

$anyo = intval($matAhora[0]) - intval($matNacimiento[0]);

if (intval($matAhora[1]) > intval($matNacimiento[1])){
    echo $anyo;
} else if (intval($matAhora[1]) < intval($matNacimiento[1])) {
    echo $anyo -1;
} else if (intval($matAhora[2]) < intval($matNacimiento[2])) {
    echo $anyo -1;
} else {
    echo $anyo;
}
    
}
