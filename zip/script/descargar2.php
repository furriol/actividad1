<?php

//primero creamos un archivo zip para incluir las imágenes

$archivo_zip = "../archivo_zip/imagenes.zip";
touch($archivo_zip);


//utilizo la clas ZipArchive

//abrir el archivo zip "archivo_zip"
$zip = new ZipArchive;
$this_zip = $zip->open($archivo_zip);


if($this_zip){

  $file_with_path = "../imagenes/1.jpg";
  $name = "1.jpg";
  $zip->addFile($file_with_path,$name);
    
  //$folder=opendir("./../imagenes");
}


/** 
    if($folder){

        while(($imagen = readdir($folder)) !== false){
            if($imagen != '.' && $imagen != '..'){
            echo $imagen;
            //$path="../imagenes/". $imagen;
            //$zip->addFile($path,$imagen);
           
            }else{
                echo "Aquí estoy";
            }
            closedir($folder);
        }
            


    }

}*/





