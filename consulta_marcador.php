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
@$nombre=$_POST['nombre'];
@$genero=$_POST['genero'];
$consulta="SELECT * FROM LIBROS WHERE Nombre_libro LIKE :m_nombre AND Género LIKE :m_genero ";

$resultado = $conexion->prepare($consulta); //Devuelve un objeto de tipo PDOStament

$resultado->execute(array(":m_nombre"=>$nombre, ":m_genero"=>$genero)); //Le pasamos por parámetro a la instrucción SQL el valor de la consulta.

//Recorrer el objeto
while($fila=$resultado->fetch(PDO::FETCH_ASSOC)){
    var_dump($fila);
    foreach ($fila as $key=>$valor){
        echo $fila[$key] . "<br>";
    }
}

//Para cerrar la tabla que se ha creado
$resultado->closeCursor();




