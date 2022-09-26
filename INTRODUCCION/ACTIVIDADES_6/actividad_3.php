<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1> SUBIDA DE ARCHIVOS</h1><br>

<form action="upload.php" method="post" enctype="multipart/form-data"><br>

        <label>Sube aquí tu fichero: </label><input type="file" name="archivo"><br>
        
        <input type="submit" name="enviar" value="Envía">
</form>

    <h1>AQUÍ ESTÁN TODAS LAS IMAGENES SUBIDAS </h1>

    <?php

        $gestor = opendir("./image");
        //echo "<img src='image/00071 - FOTO.jpg' width='200px'/> <br>";
        //$image = readdir($gestor);
        //echo $image;


        if($gestor){
            while(($image = readdir($gestor)) !== false){
                if($image != '.' && $image != '..'){
                    echo "<img src='image/$image' width='200px'/> <br/>";
                }
            }
        }else{
            echo "Algo va mal";
        }
    
    ?>
</body>
</html>