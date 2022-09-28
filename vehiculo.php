<?php

class Vehiculo {
    // Variables de clase
    private static $kmTotales = 0;
    private static $vehiculosCreados = 0;
    
    // Variables de instancia
    private $kmRecorridos;
    
    // Métodos de clase
    
    public static function getVehiculosCreados() {
      return Vehiculo::$vehiculosCreados; //porque es propiedad estática
    }
    
    public static function getKmTotales() {
      return Vehiculo::$kmTotales;   //porque es propiedad estática
    }
  
    // Métodos de instancia, con cada instancia que se crea en una clase heredada
    public function __construct() {
      Vehiculo::$vehiculosCreados++; //porque es propiedad estática
      $this->kmRecorridos = 0;
    }
  
    public function getKmRecorridos() {
      return $this->kmRecorridos; // porque la variable km recorrido es public
    }
    
    public function recorre($km) {
      $this->kmRecorridos += $km;   //la funcion km recorridos es publiva
      Vehiculo::$kmTotales += $km;    //porque es una variable estatica
    }
  }