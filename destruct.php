<?php

//Utiliza el método mágico destructor en la generación de un juego que consista en adivinar un número generado de manera aleatoria
//En cada intento se genera un objeto que se destruye después de ejecutar todas las acciones.
class Juegos{
    public $numero;
    public $eleccion;


    public function __construct(){
        $this->numero=rand(0,5);
    }

    public function probar(){
            if($this->numero == $this->eleccion){
                echo "Has acertado";}
                else{
                    echo "Has perdido";
                }}

    public function __destruct(){
        echo "Objeto destruido, prueba otra vez";
    }
  

    public function setEleccion($eleccion){
        $this->eleccion=$eleccion;
    }
}

$partida1 = new Juegos;
$partida1->setEleccion(2);
$partida1->probar();


