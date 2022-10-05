<?php

require_once "autoload.php";

class Ejemplo{
    
    public $usuario;
    public $categoria;
    public $entrada;

    public function __construct(){
        $this->usuario=new MisClases\Categoria();
    }
}

$principal=new Ejemplo();
var_dump($principal->usuario);