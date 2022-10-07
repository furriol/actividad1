<?php

//Crea una clase llamada Persona, en la que definas un constructor y 3 atributos (private): nombre, apellidos, edad
//A partir de uno de los métodos mágicos, crea un programa que se consiga obtener el valor de los atributos sin emplear un getter, únicamente con el uso de un método mágico.

//call se acciona cuando no se puede acceder al metodo seleccionado


class Persona{
    private $nombre;
    private $edad;
    private $ciudad;
    

    public function __construct($nombre, $edad, $ciudad){
        $this->nombre=$nombre;
        $this->edad=$edad;
        $this->ciudad=$ciudad;

    }

    public function __call($name, $arguments){
        $prefix_metodo=substr($name, 0, 3); //Devuelve parte de una cadena : variable, start, lenght

        if($prefix_metodo == 'get'){
            $nombre_metodo = substr(strtolower($name), 3); //Puede no tener lenght

            if($nombre_metodo=="nombre"){
                return $this->nombre;
            }else{
                return "Atributo desconocido";
            }
            
           

            //return $this->nombre_metodo;
            //echo "Estoy aquí";
            //echo $nombre_metodo;
        }

    
    }
}

$persona = new Persona ("Paco", 66, "Madrid");
echo $persona->getNombre();
