<?php

$db_host="localhost";
$db_nombre="pruebas";
$db_usuario="root";
$db_contra="";

class Conexion{
    protected $conexion;

    public function Conectar(){
    try{
        $this->conexion=new PDO('mysql:host=localhost; dbname=pruebas', 'root', '');
        $this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->conexion->exec('SET CHARACTER SET utf8');
        return $this->conexion_db;
    
    }catch(Exception $e){
        echo "La línea de error es: " . $e->getLine();
    
    }
}
}

$conexion_2=new Conexion();




