<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="post">

<label> ¿Que tabla quieres calcular? <input type="number" name="tabla" placeholder="Escribe tu número"></label>
<input type="submit" name="enviando" value="Calcula">

    </form>
<?php

$num=1;

if(isset($_POST["enviando"])){

function calcular($num){
    $tabla=$_POST["tabla"];
while($num<=10){
    echo $num*$tabla . "<br>";
    $num++;
}}
echo calcular($num);
}
?>
</body>
</html>

//Para mostrar una tabla de multiplicar







