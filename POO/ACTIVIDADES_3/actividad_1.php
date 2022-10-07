<?php
//Utilizo traits para que todas tengan un mismo método pero sin heredar
//Nos permite compartir una serie de métodos para distintas clases.
trait Utilidades{
    public function mostrarNombre(){
        return $this->nombre;
    }
}

class Coche{
    public $nombre;
    public $marca;

    use Utilidades;
}

class Persona{
    public $nombre;
    public $apellidos;

    use Utilidades;
}



