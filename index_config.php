<?php

require_once "configuracion.php";

// como es una clase estática puedo llamar directamente a algún método

Configuracion::setColor("blue");
Configuracion::setEntorno("localhost");
Configuracion::setNewsletter(true);

echo Configuracion::$color . "<br>" .Configuracion::$newsletter . "<br>" ;

echo Configuracion::URL_COMPLETA;

$ordenador=new PcAsus;

echo $ordenador->encender();

var_dump($ordenador);