<?php 
require_once "autoload.php";

use MisClases\Usuario;
use MisClases\Categoria;
use MisClases\Entrada;



class Principal{
    public $usuario;
    public $categoria;
    public $entrada;

    public function __construct(){
        $this->usuario = new Usuario();
        $this->categoria = new Categoria();
        $this->entrada = new Entrada();

    }
}

$principal=new Principal();
var_dump($principal->usuario);
var_dump($principal->categoria);
var_dump($principal->entrada);

$principal2=new PanelAdministrador\Usuario();
var_dump($principal2);