<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

//Defino las variables

$n=$_GET['n'];
$contador=$_GET['contador'];
$numeros=$_GET['numeros'];

//Si no hay números, entonces el contador y el string de numeros a 0

if(!isset($n)){
    $contador = 0;
    $numeros= "";
}
//Para mostrar los datos introducidos
if($contador==6){

    echo "Estoy dentro";
    $numeros = $numeros . " " . $n; //con esto añado el último número
    $numeros = substr($numeros,2); // quita los primeros espacios

    $num = explode(" ", $numeros);
    echo "Los números introducidos son: ";
    foreach ($num as $n) {
        echo $n . ", ";
    }
}
//Pide números para montar la cadena
    if($contador<6 || (!isset($n))){
?>
    <form action="#" method="get">

    Introduce un número:

    <input type="number" name="n" autofocus>
    <input type="hidden" name="contador" value="<?= ++$contador ?>">
    <input type="hidden" name="numeros" value="<?= $numeros . " " . $n ?>">
    <input type="submit" value="Envía">
    
    </form>
    <?php
    }
    ?>
    
    
   
    
</body>
</html>