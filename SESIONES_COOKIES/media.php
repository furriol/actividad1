<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="#" method="post">
      <input type="hidden" name="ejercicio" value="01">
      <input type="number" name="n" autofocus>
      <input type="submit" value="Aceptar">
    </form>
</body>
</html>


<?php

$n = $_POST['n'];

session_start();

$_SESSION['total'] += $n;
$_SESSION['cuenta']++;



?>