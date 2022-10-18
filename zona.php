<?php

//Creo una clase, con la que podré definir tantas zonas para el concierto como quiera.

class Zona {
  private $descripcion; //nombre de la zona
  private $aforo; //Fijo un número previo de entradas
  private $entradasLibres; //se actulizará dependiendo de las entradas vendidas
  
  public function __construct($d, $a) {
    $this->descripcion = $d;
    $this->aforo = $a;
    $this->entradasLibres = $a;
  }
  
  public function getDescripcion() {
    return $this->descripcion;
  }
  
  public function getEntradasLibres() {
    return $this->entradasLibres;
  }
  
  public function vende($n) {
    if ($n <= $this->entradasLibres) {
      $this->entradasLibres = $this->entradasLibres - $n;
      return true; // la venta es posible
    } else {
      return false; // no se pueden vender más entradas de las que hay en la zona
    }
  }
  
  public function __toString() { //con la función toString hago que el objeto se comporte como un array me muestre la información de la zona.
    return  "<b>".$this->descripcion."</b><br>".
        "Aforo total: ".$this->aforo." localidades<br>".
        "Localidades vendidas: ".($this->aforo - $this->entradasLibres)."<br>".
        "Localidades libres: ".$this->entradasLibres."<br><hr>";
  }
}