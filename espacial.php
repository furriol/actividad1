<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="cuenta_pares.php" method="post">
        <label>Introduce número para comparar </label> <input type="number" name="n" autofocus>
        <input type="submit" value="Aceptar">
</form>

<?php

$a=1;
$b=0;
echo $a<=>$b;

/*
 
 $n=$_POST["n"];


 echo $n<=>0;

 if($n=$compara){
    echo "El número es cero";
 } if($n>$compara){
    echo "El número es positivo";
 }else{
    echo "El número es negativo";
 }

*/
?>

</body>
</html>