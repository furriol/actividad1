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

    if(isset($_POST['juego'])){
        $dado1=rand(0,9);
        $dado2=rand(0,9);
        $dado3=rand(0,9);

        $creditos=$_POST['creditos'];
        $creditos-=10;

        $numerosCinco=0;

        if($dado1===5){
            $numerosCinco++;
        }
        if($dado2===5){
            $numerosCinco++;
        } 
        if($dado3===5){
            $numerosCinco++;
        }

        if($numerosCinco === 1){
            $creditos+=5;}

        else if($numerosCinco === 2){
            $creditos+=25;}

        else if($numerosCinco === 3)
            $creditos+=100;
        

    }else{
        $creditos=100;
    }

    if($creditos<10){
        echo "No puedes jugar";
    }else {



    ?>

    <h1>Tienes <?php echo $creditos; ?> créditos </h1>

    <form method="post">

    <input type="hidden" name="creditos" value="<?php echo $creditos; ?>">
    <input type="text" value="<?php if(isset($dado1)) {echo $dado1;} ?>"> 
    <input type="text" value="<?php if(isset($dado2)) {echo $dado2;} ?>">
    <input type="text" value="<?php if(isset($dado3)) {echo $dado3;} ?>">

    <input type="submit" name="juego" value="Juega!">
    </form>

<?php
    }

?>
    
</body>
</html>