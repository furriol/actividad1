<?php

class Persona{
    private $nombre;
    private $edad;
    private $ciudad;

    public function __construct($nombre, $edad, $ciudad){
        $this->nombre;
        $this->edad;
        $this->ciudad;
    }

    public function __call($name, $arguments){
        return "No existe el método";
    }
}

$persona = new Persona("Alejandro", "27", "Valencia");

echo $persona->getNombre();

try{
    throw new Exception("Errores de lógica");
}

catch(Exception $e){
    echo "Ha habido un error" . $e->getMessage();
    
}finally{
    echo "Todo correcto";
}

