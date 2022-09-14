<?php



function contador(){

    static $numero=0;

    $numero++;

    echo $numero . "<br>";

}

contador();    // 1
contador();    // 2
contador();    // 3
contador();    // 4
contador();    // 5

//¿Por qué no se muestran los resultados que se esperan en el comentario?

