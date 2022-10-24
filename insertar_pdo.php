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
        <label>Introduce el libro que deseeas buscar</label>
        Nombre libro: <input type="text" name="nombre">
        Genero: <input type="text" name="genero">
        <input type="submit">
    </form>
</body>
</html><?php


//Vamos a hacer consultas preparadas con marcadores

try{

	
    $conexion = new PDO('mysql:host=localhost;dbname=pruebas', "root", ""); //instanciar la clase PDO
	echo "Conexión OK";
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //El primero reporta errores, concretamente lanza las excepciones
    $conexion->exec('SET CHARACTER SET utf8');

}catch(PDOException $e){

    //Excepción: Aparantemente está bien y no detecta fallo pero hay algo que ha fallado en la ejecución
    //Se genera el objeto fallo

	echo "ERROR: " . $e->getMessage();

}




