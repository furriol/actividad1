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
    $n=$_POST["n"];
    
    if(!isset($n)){
        $cuentaNumeros=0;
        $positivos=0;
    }
    else{
        $cuentaNumeros++;
    }
    if($cuentaNumeros<11){
    ?>

    <form action="cuenta_pares.php" method="post">
        Número <?php echo $cuentaNumeros ?> <input type="number" name="n" autofocus>
        <input type="submit" value="Aceptar"> 
    </form>

    <?php
    }
    ?>

</body>
</html>