<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juego de apuestas</title>
</head>
<body>
    <?php


if(isset($_POST['juego'])){

//Genero los números aleatorios
        $dado1=rand(0,9);
        $dado2=rand(0,9);
        $dado3=rand(0,9);


// Declaro las variables recogidas en el formulario
        $creditos=$_POST['creditos'];
        $apuesta=$_POST["opcion"];

        $creditos-=$apuesta;

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
            if($apuesta==10){
            $creditos+=20;}

            if($apuesta==20){
                $creditos+=40;}

            if($apuesta==50){
                $creditos+=100;}
        }

        else if($numerosCinco === 2){
            if($apuesta==10){
                $creditos+=30;}
    
            if($apuesta==20){
                $creditos+=60;}
    
            if($apuesta==50){
                $creditos+=150;}
        
        }

        else if($numerosCinco === 3){
            if($apuesta==10){
                $creditos+=40;}
    
            if($apuesta==20){
                $creditos+=80;}
    
            if($apuesta==50){
                $creditos+=200;}
        }
            
        

 }else{
        $creditos=100;
}

    if($creditos<10){
        echo "No puedes jugar, has perdido.";
    }elseif($creditos>=300) {
        echo "<h1>Has ganado</h1>";
    }
    else{
    ?>

        <h1>Tienes <?php echo $creditos; ?> créditos </h1>

<form method="post">

<input type="hidden" name="creditos" value="<?php echo $creditos; ?>">
<input type="text" value="<?php if(isset($dado1)) {echo $dado1;} ?>"> 
<input type="text" value="<?php if(isset($dado2)) {echo $dado2;} ?>">
<input type="text" value="<?php if(isset($dado3)) {echo $dado3;} ?>">

<label>¿Qué cantidad quieres apostar?:</label>
        
        <select id="apuesta" name="opcion">
    
        <option value="10">10 créditos</option>
        <option value="20">20 créditos</option>
        <option value="50">50 créditos</option>
    
      </select>

<input type="submit" name="juego" value="Juega!">
</form>

<?php

    }

    ?>
    
</body>
</html>