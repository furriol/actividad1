<?php
include_once 'vehiculo.php';

class Bicicleta extends Vehiculo {

  private $numeroDeMarchas;

  public function __construct($n) {
    parent::__construct();
    $this->numeroDeMarchas = $n;
  }
  
  public function hazCaballito() {
    return "Estoy haciendo el caballitooooooo";
  }
}

$bh=new Bicicleta(4);
echo $bh->hazCaballito();
echo Vehiculo::getVehiculosCreados();

$bh->recorre(45);

echo Vehiculo::getKmTotales();