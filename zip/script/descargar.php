<?php

//primero creamos un archivo zip para incluir las imágenes

$archivo_zip = "../archivo_zip/imagenes.zip";
touch($archivo_zip);


//utilizo la clas ZipArchive

//abrir el archivo zip "archivo_zip"

$zip = new ZipArchive;
$this_zip = $zip->open($archivo_zip);



if($this_zip){

    $folder=opendir('./../imagenes/');

    //if($image != '.' && $image != '..'){
      //  echo "<img src='image/$image' width='200px'/> <br/>";
    //}

    if($folder){

        while(($imagen = readdir($folder)) !== false){
            if($imagen != '.' && $imagen != '..'){
            echo $imagen;
            $path="../imagenes/". $imagen;
            $zip->addFile($path,$imagen);
           
            }else{
               echo "Aquí estoy";
            }
            closedir($folder);
        }
            


    }

}





