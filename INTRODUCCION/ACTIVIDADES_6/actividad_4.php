<?php

$archivo=$_FILES['archivo'];

$nombre=$archivo["name"];

$tipo=$archivo["type"];

echo $tipo;
echo $nombre;

if($tipo=="image/jpg" || $tipo=="image/jpeg" || $tipo=="image/gif" || $tipo=="image/png"){
    if(!is_dir("image")){
        mkdir("image", 0777);
    }

    move_uploaded_file($archivo["tmp_name"], "image/" . $nombre);
    echo"Imagen subida correctamente";
    header("Refresh: 5; URL=form_file.php");


}

else{
   header("Refresh: 5; URL=form_file.php");
   echo "<h1>Sube una imagen con un archivo admitido</h1>";

}

die();

