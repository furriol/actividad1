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

$error=mysqli_connect_errno();


if(!$conexion){
    
    echo $error;
    echo "Fallo al conectar";
    exit();
}

//Para indicar que la base de datos trabaja con carácteres latinos
mysqli_set_charset($conexion, "utf8");
//mysqli_select_db($conexion, $db_nombre) or die("No se encuentra la base de datos");//Para cambiar la base de datos con la que se está trabajando

//La función se ejecuta si ocurre algún error, por ejemplo un cambio de nombre de la base de datos. La función devuelve el número de error

@$busqueda=$_POST['busqueda'];


$aKeyword = explode(" ", $_POST['busqueda']);
$query ="SELECT * FROM LIBROS WHERE Nombre_libro like '%" . $aKeyword[0] . "%' OR Nombre_libro like '%" . $aKeyword[0] . "%'";


var_dump($aKeyword);

for($i = 0; $i < count($aKeyword); $i++) {
  if(!empty($aKeyword[$i])) {
    $resultados=mysqli_query($conexion,$query);
    var_dump($resultados);
  
    while($fila=mysqli_fetch_array($resultados,MYSQLI_ASSOC)){
        foreach ($fila as $key=>$valor){
            echo $fila[$key] . "<br>";
        }
    }
  }


}

mysqli_close($conexion);



