<?php 
require_once "autoload.php";

use MisClases\Datos;
use MisClases\DatosFiscales;
use MisClases\Departamento;



class Empleado {
    public $datos;
    public $datosfiscales;
    public $departamento;

    public function __construct($nombre,$apellidos){
        $this->datos = new Datos($nombre,$apellidos);
        $this->datosfiscales = new DatosFiscales();
        $this->departamento = new Departamento();
    }




}

$empleado1=new Empleado("Alejandro","Furriol");

$datos=new Datos("Hola", "Hola");
var_dump($datos);




//var_dump($empleado1->datos);

/** 
$principal=new Principal();
var_dump($principal->usuario);
var_dump($principal->categoria);
var_dump($principal->entrada);

$principal2=new PanelAdministrador\Usuario();
var_dump($principal2); 

*/