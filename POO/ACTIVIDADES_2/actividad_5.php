<?php

class Configuracion{
    public static $color;
    public static $newsletter;
    public static $entorno;

    const URL_COMPLETA = "http://localhost";


    //las constantes de por si son estáticas



    //self:: para acceder a métodos o propiedades estáticas.

    public static function getColor(){
        return self::$color;
    }
    public static function getNewsletter(){
        return self::$newsletter;
    }

    public static function getEntorno(){
        return self::$entorno;
    }

    public static function setColor($color){
        self::$color=$color;
    }

    public static function setNewsletter($newsletter){
        self::$newsletter=$newsletter;
    }

    public static function setEntorno($entorno){
        self::$entorno=$entorno;
    }

    
}

abstract class Ordenador{
    public $encendido;

    abstract public function encender();

    abstract public function apagar();

}

class PcAsus extends Ordenador{
    public $software;
    public function arrancarSoftware(){
        $this->software=true;
    }

    public function encender(){
        $this->encendido=true;
    }
    public function apagar(){
        $this->encendido=false;
    }
}

// Modifica el siguiente programa para que funcione correctamente

interface Ordenador1{
    public function encender(){
        return "Estoy encendido";
    }
    public function apagar(){
        return "Estoy apagado";
    }
    public function detectarUSB()
    {
        return "USB detectado";
    }
}

class iMac extends Ordenador1{
    public $modelo;

    public function getModelo()
    {
        return $this->modelo;
    }
    public function setModelo($modelo)
    {
        $this->modelo = $modelo;
        return $this;
    }

    public function encender();
    public function apagar();
    public function detectarUSB();
}

$maquintos= new iMac();
echo $maquintos->encender();

var_dump($maquintos);

