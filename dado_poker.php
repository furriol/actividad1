<?php

//Crearé un objeto por cada dado
class DadoPoker {
  private static $caras = array("As", "K", "Q", "J", "7", "8");
  private static $tiradasTotales = 0; //Static, es decir no hace falta instaciar la clase para acceder a ella, y no puedo acceder directamente, sino a través de un método.
  private $cara;

  public static function getTiradasTotales() {
    return DadoPoker::$tiradasTotales;
  }
  
  static function setTiradasTotales($tiradasTotales) {
    self::$tiradasTotales = $tiradasTotales;
  }

  public function tira() {
    $this->cara = self::$caras[rand(0, 5)];
    self::$tiradasTotales++;
  }
  
  public function nombreFigura() {
    return $this->cara;
  }
}

