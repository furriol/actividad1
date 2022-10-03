<?php

class DadoPoker {
  private static $caras = array("As", "K", "Q", "J", "7", "8");
  private static $tiradasTotales = 0;
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

  //función para que me deje ver el número de caras

  public function getCara(){
    return $this->cara;
  }
}

//$tirada1=new DadoPoker();

//$tirada1->tira();

//echo DadoPoker::getTiradasTotales();
//echo "<br>";
//echo $tirada1->getCara();





