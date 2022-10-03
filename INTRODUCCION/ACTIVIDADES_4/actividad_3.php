<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <fieldset>
        <legend>Juego de preguntas </legend>
        <form method="post">
                <p>Enunciado pregunta 1</p>
            <p>SI: <input type="radio" name="r1" value="SI"></p>
            <p>NO: <input type="radio" name="r1" value="NO"></p>
            
                <p>Enunciado pregunta 2</p>
            <p>SI: <input type="radio" name="r2" value="SI"></p>
            <p>NO: <input type="radio" name="r2" value="NO"></p>
           
                <p>Enunciado pregunta 3</p>
            <p>SI: <input type="radio" name="r3" value="SI"></p>
            <p>NO: <input type="radio" name="r3" value="NO"></p>
        
            <input      type="submit" value="envia">
        

        </form>

        <?php
            if($_POST){
                $r1 = $_POST['r1'];
                $r2 = $_POST['r2'];
                $r3 = $_POST['r3'];

                $correctas = 0;
                $incorrectas = 0;

                if($r1=="SI"){
                    echo "Respuesta 1 correcta! <br>";
                    $correctas+=1;
                }else{
                    echo "Respuesta 1 incorrecta! <br>";
                    $incorrectas+=1;
                }

                if($r1=="SI"){
                    echo "Respuesta 2 correcta! <br>";
                    $correctas+=1;
                }else{
                    echo "Respuesta 2 incorrecta! <br>";
                    $incorrectas+=1;
                }

                if($r1=="SI"){
                    echo "Respuesta 3 correcta! <br>";
                    $correctas+=1;
                }else{
                    echo "Respuesta 3 incorrecta! <br>";
                    $incorrectas+=1;
                }

                echo "Has acertado $correctas preguntas <br>";
                echo "Has fallado $incorrectas preguntas";

            

           
        
        }



        ?>
    </fieldset>
</body>
</html>