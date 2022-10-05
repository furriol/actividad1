<?php
require_once "autoload.php";
//Estamos haciendo un require manual y es un proceso costoso, para eso emplearemos el autoload
//require_once "calses/usuario.php";
//require_once "calses/entrada.php";
//require_once "calses/categoria.php";

//Vamos a hacer un autorequire

$usuario= new Usuario;
echo $usuario->nombre;


//namespaces, nos va a permitir agrupar clases en común
//espacios de nombres y paquetes
//Agrupar en paquetes diferentes clases


class Principal{
    public $usuario;
    public $categoria;
    public $entrada;

    public function __construct(){
        $this->usuario = new Usuario();
        //new MisClases\Usuario();
    }
}

$principal=new Principal;
var_dump($this->usuario);


namespace MisClases;








