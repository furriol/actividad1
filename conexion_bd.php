<?php

$db_host="localhost";
$db_nombre="pruebas";
$db_usuario="root";
$db_contra="";

$conexion=mysqli_connect($db_host,$db_usuario,$db_contra,$db_nombre);

//crear un archivo solo para la conexión


//Manejo de errores por si el servidor cambia el nombre de la base de datos
//Para que el resto de la web funcione sin problemas
if(mysqli_connect_errno()){ //Si se ejecuta que haga algo, se ejecuta si hay algún error.
    echo "Fallo al conectar";
    exit(); //Sale del código PHP
}

$consulta="SELECT * FROM DATOSUSUARIOS";

$resultado=mysqli_query($conexion,$consulta); //es un recordset

while(($fila=mysqli_fetch_row($resultado))){

//$fila=mysqli_fetch_row($resultado); //va recorriendo fila a fila y lo almacena en un array / $fila es un array



for($i=0;$i<count($fila); $i++){
    echo $fila[$i] . "<br>";
}
}

$consulta2="SELECT * FROM LIBROS WHERE GÉNERO='CABALLERESCO'";
$resultado2=mysqli_query($conexion,$consulta2);
while($fila2=mysqli_fetch_row($resultado2)){

    for($i=0;$i<count($fila2); $i++){
        echo $fila2[$i] . "<br>";
    }

}
mysqli_close($conexion);

// SELECT * FROM PRODUCTOS WHERE NOMBREARTICULO LIKE '%CABALLERO'
// SELECT * FROM PRODUCTOS WHERE NOMBREARTICULO LIKE 'CENI_ERO'




