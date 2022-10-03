<?php

class Coche{

    private $motor;
    private $ruedas;
    private $color;
   

    function __construct(){
        $this->ruedas=4;
        $this->color="Blanco";
        $this->motor="1600";
    }

   function __get($propiedad){
        if(property_exists($this, $propiedad)){
            return $this->ruedas;
       }
    }


     

    function arrancar(){
        return "Estoy arrancando";
    }

    function girar(){
        return "Estoy girando";
    }

    function frenar(){
        return "Estoy frenando";
    }

    function establece_color($color_coche, $nombre_coche){
        $this->color=$color_coche;
        echo "El color del coche ". $nombre_coche . " es " . $this->color . "<br>";
    }

}

$seat=new Coche();
$renault=new Coche();

echo $renault->arrancar() . "<br>";

echo $seat->ruedas;
echo $seat->motor;
$seat->establece_color("Rojo", "Renault");




class Camion extends Coche{

    private $combustible;

    function __construct($combustible){
        $this->combustible=$combustible;
    }

    function establece_color($color_camion,$nombre_camion){
    $this->color=$color_camion;
    return "El color del camión " . $nombre_camion . " es " . $this->color;
    }

    function arrancar(){
        return parent::arrancar(); //añadir cosas a la funcion de la superclase
        echo "Estoy arrancado";
    }
}

$volvo=new Camion("gasolina");
$pegaso=new Camion("gasolina");

echo $volvo->arrancar();
echo $pegaso->establece_color("blanco","pegaso");
echo $volvo->arrancar();
