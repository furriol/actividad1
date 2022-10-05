<?php

namespace MisClases;

class Datos{
    public $nombre;
    public $apellidos;
    public $email;
    

    public function __construct($nombre,$apellidos){
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
       
    }
    public function DevolverDatos(){
        return $this->nombre . "<br>";
        return $this->apellidos . "<br>";
        return $this->email;
    }
}