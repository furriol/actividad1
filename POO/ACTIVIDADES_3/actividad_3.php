<?php

trait Utilidades{
    public function mostrarNombre(){
        return $this->nombre;
    }
}

class Coche{
    public $nombre;
    public $marca;

    use Utilidades;

    public function __toString(){
        return "Estas llamanado a la función como String";

    }
}

class Persona{
    public $nombre;
    public $apellidos;

    use Utilidades;
}

$mazda= new Coche;
echo $mazda;


