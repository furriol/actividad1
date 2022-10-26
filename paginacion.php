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
        <input type="submit" name="again" value="Haz otra consulta">
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

if(isset($_POST['nombre'])){
@$nombre="%" . $_POST['nombre'] . "%";}

else{
    $nombre=$_GET['anterior'];
}

$tamano_paginas=1;

if(isset($_GET['pagina'])){

if(isset($_POST['again'])){
    header("Location:paginacion.php");
}else{
    $pagina=$_GET['pagina'];
}
}else{
    
$pagina=1;

}
$comienzo = ($pagina-1)*$tamano_paginas;

$consulta="SELECT * FROM LIBROS WHERE Nombre_libro LIKE :m_nombre"; //El segundo valor es el número de registros que se muestran por consulta

$resultado = $conexion->prepare($consulta); //Devuelve un objeto de tipo PDOStament

$resultado->execute(array(":m_nombre"=>$nombre)); //Le pasamos por parámetro a la instrucción SQL el valor de la consulta.

$num_filas=$resultado->rowCount();

$total_paginas=ceil($num_filas/$tamano_paginas);


echo "Número de registros de la consulta: " . $num_filas ."<br>";
echo "Mostramos " . $tamano_paginas . " registros" ."<br>";
echo "Mostrando la página " . $pagina . " de " . $total_paginas . "<br>";
$resultado->closeCursor();

$consulta_limite="SELECT * FROM LIBROS WHERE Nombre_libro LIKE :m_nombre LIMIT $comienzo,$tamano_paginas"; //El segundo valor es el número de registros que se muestran por consulta

$resultado_limite = $conexion->prepare($consulta_limite); //Devuelve un objeto de tipo PDOStament

$resultado_limite->execute(array(":m_nombre"=>$nombre)); //Le pasamos por parámetro a la instrucción SQL el valor de la consulta.


while($fila=$resultado_limite->fetch(PDO::FETCH_ASSOC)){
    
    foreach ($fila as $key=>$valor){
        echo $fila[$key] . "<br>";
    }
}


//Para cerrar la tabla que se ha creado
$resultado_limite->closeCursor();



//---------PAGINACIÓN

echo "<a href='paginacion.php?pagina=2&anterior=" . $nombre . "'> Hola </a>";

for($i=1;$i<=$total_paginas;$i++){

  echo "<a href='?pagina=" . $i . "&anterior=" . $nombre . "'>" . $i . "</a> ";

}


//me falta pasar el valor de la consulta anterior por GET, es decir, por la URL.



