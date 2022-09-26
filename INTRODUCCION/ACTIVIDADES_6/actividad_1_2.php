<?php

//1º ver con un if si llegan todos los campos

$error="faltan valores";

if(!empty($_POST['nombre']) && !empty($_POST['edad']) && !empty($_POST['email']) && !empty($_POST['contraseña'])){
$error="ok";

    $nombre=$_POST['nombre'];
    $edad=$_POST['edad'];
    $email=$_POST['email'];
    $contraseña=$_POST['contraseña'];


    //vamos a validar el nombre

    if(!is_string($nombre) || !preg_match("/^[a-zA-z]/",$nombre)){
        $error="Error en el nombre";  
    }

    if(!is_numeric($edad) || !preg_match("/[0-9]+/",$edad)){
        $error="Error en la edad";  
    }

    if(!is_string($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)){
        $error="Error en el email";  
    }

    if(empty($contraseña) || strlen($contraseña)<5){
        $error="Error en el password";  
    }

    var_dump($_POST);


}/*else{
    $error="faltan valores";
    header("Location:form_validacion.php?error=$error");
}*/

if($error!="ok"){
    header("Location:form_validacion.php?error=$error");
}
    if($error=="ok"){
        echo "<h1 style=color:green> Todos los campos introducidos son válidos </h1>";
        echo "<p> $nombre </p>";
        echo "<p> $edad </p>";
        echo "<p> $email </p>";
        echo "<p> $contraseña </p>";
    }








