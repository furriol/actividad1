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
        <input type="text" name="busqueda">
        <input type="submit">
    </form>
</body>
</html>

<?php

//Realizo la conexión con la base de datos
$db_host="localhost";
$db_nombre="pruebas";
$db_usuario="root";
$db_contra="";

$conexion=mysqli_connect($db_host,$db_usuario,$db_contra,$db_nombre);

//Para indicar que la base de datos trabaja con carácteres latinos
mysqli_set_charset($conexion, "utf8");


@$busqueda="%". $_POST['busqueda'] . "%";


$consulta="SELECT * FROM LIBROS WHERE Nombre_libro LIKE ?";

$resultado=mysqli_prepare($conexion, $consulta); //Prepara la consulta para su ejecución

$ok=mysqli_stmt_bind_param($resultado,"s", $busqueda); // Variable que se introduce a la sentencia preparada es de tipo string

//$consulta="SELECT * FROM LIBROS WHERE Nombre_libro LIKE'%$busqueda%'";
//$query ="SELECT * FROM LIBROS WHERE Nombre_libro like '%" . $aKeyword[0] . "%' OR Nombre_libro like '%" . $aKeyword[0] . "%'";




$ok=mysqli_stmt_execute($resultado); // Devuelve true o false

if($ok==false){
    echo "Error al ejecutar la consulta";
}else{

    $ok=mysqli_stmt_bind_result($resultado, $nombre_libro, $codigo, $editorial, $autor, $genero, $pais, $numero, $precio, $año, $nulo ); //Vincula variables a una sentencia preparada para el almacenamiento de resultados
    echo  "Libros encontrados:";
    while(mysqli_stmt_fetch($resultado)){ //Obtiene los resultados de una sentencia preparadas en las variables vinculadas
        echo $nombre_libro . "<br>";
        echo $codigo . "<br>";
        echo $editorial . "<br>";
        echo $autor . "<br>";
        echo $genero . "<br>";
        echo $pais . "<br>";
        echo $numero . "<br>";
        echo $precio . "<br>";
        echo $año . "<br>";
        echo $nulo . "<br>";
        
    }
}



mysqli_close($conexion);



