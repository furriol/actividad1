<?php

class Persona{ //no public class como en java

    private $nombre;
    private $apellidos;
    private $edad;

    function __construct($nombre, $apellidos, $edad){ //nos contruye el objeto
        $this->nombre=$nombre;
        $this->apellidos=$apellidos;
        $this->edad=$edad;
    }
//getters y setter sirven para todas las propiedades yacceder a ellas si son private
    function __get($propiedad){
        if(property_exists($this, $propiedad)){
            return $this->$propiedad;
        }
    }


    function __set($propiedad, $valor){
         if(property_exists($this,$propiedad)){
            $this->$propiedad = $valor;
         }
    }

    function mayorEdad(){
        return $this->edad>=18;
    }

    function nombreCompleto(){
        return $this->nombre . " " . $this->apellidos;
    }



}

$persona= new Persona("Alejandro", "Furriol", 9);


echo $persona->apellidos;

/*if($persona->mayorEdad()){
    echo $persona->nombreCompleto() . " es mayor de edad";
}else{
    echo $persona->nombreCompleto() . " es menor de edad";
}
*/
