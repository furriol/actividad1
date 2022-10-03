<?php

include_once 'vehiculo.php';

class Coche extends Vehiculo {

  private $cilindrada;

  public function __construct($c) {
    parent::__construct();
    $this->cilindrada = $c;
  }
  
  public function quemaRueda() {
    return "Shhhsssssss";
  }
}
