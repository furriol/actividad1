<?php

class Usuario{

    public $nombre;
    public $apellido;
    public $id;

    public function __construct($id){
        $this->id="$id";
    }

    public function getNombre(){
        return $this->nombre;
    }
    public function getApellido(){
        return $this->apellido;
    }

    public function setNombre($nombre){
        $this->nombre=$nombre;
    }
    public function setApellido($apellido){
        $this->apellido=$apellido;
    }
}

$user1= new usuario(1);
$user1->setNombre("Alejandro");
$user1->setApellido("Furriol");

echo $user1->id;

echo "Usuario: " . $user1->getNombre() . " " . $user1->getApellido();

$clase = class_exists("Usuario");


try {
    if($clase){
        echo "La clase existe";
        $prueba=new Usuario(1);

    }else{
        throw new Exception("Errores de lógica");
    }
    
} catch (Exception $e) {
    echo "Ha habido un error" . $e->getMessage();
}
