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

        if(isset($_GET['error'])){
            $error=$_GET['error'];
            if($error=="faltan valores"){
                echo "<strong> Introduce los datos correctamente </strong>";
            }
            if($error=="Error en el nombre"){
                echo "<strong> Error en el nombre </strong>";
            }
            if($error=="Error en la edad"){
                echo "<strong> Error en la edad </strong>";
            }
            if($error=="Error en el email"){
                echo "<strong> Error en el email </strong>";
            }
            if($error=="Error en el password"){
              echo "<strong> Error en el password </strong>";
            }
        }
        

    ?>
    <form action="validacion.php" method="post"><br>
        <label>Nombre:</label><input type="text" name="nombre" required autofocus pattern="[a-zA-Z]+"><br>
        <label>Edad:</label><input type="text" name="edad" required pattern="[0-9]+"><br>
        <label>Email:</label><input type="text" name="email" required><br>
        <label>Contraseña:</label><input type="password" name="contraseña" required minlength="5"><br>
        <input type="submit" name="enviar" value="Envía">
    </form>
</body>
</html>