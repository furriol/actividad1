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
    
    $n = $_POST["n"];
    $cuenta_numeros = $_POST["cuenta_numeros"];
    $numero_texto = $_POST["numero_texto"];

    // establezco los valores iniciales

    if(!isset($n)){
        $cuenta_numeros = 0;
        $numero_texto = "";
    }

   
    
    //para que me vaya pidiendo los números

    if(($cuenta_numeros<6) || (!isset($n))){

     

        ?>
        <form action="" method="post">
            Introduzca un número:
            <input type=number name="n" autofocus>
            <input type="hidden" name="cuenta_numeros" value="<?= ++$cuenta_numeros ?>">
            <input type="hidden" name="numero_texto" value="<?= $numero_texto . " " . $n ?>">
            <input type="submit" value="AÑADE">
            <input type="submit" value="volver a empezar" name="empezar">

        </form>

      <?php
    }

    if($cuenta_numeros == 6){
        $numero_texto = $numero_texto . " " . $n; //añade el último número
        $numero = explode(" ", $numero_texto); //convierte a array

        foreach($numero as $n) //extrae los números del array

            echo $n . " ";
    }

    if(isset($empezar)){
        unset($numero);
        $cuenta_numeros=0;
        $n=0;
        $numero_texto=0;
    }
    ?>
</body>
</html>