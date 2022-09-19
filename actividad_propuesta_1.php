<?php

        $coche="Nissan";

     
    function dimeCoche(){

        static $coche;
        $coche="La marca del coche es " . $coche;

    }
    
    dimeCoche();

    echo $coche;

    //¿Porque no muestra el mensaje que está dentro de la función? Completa el código para que si que lo haga.