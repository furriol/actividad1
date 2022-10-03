<html>
<head>
<title>Pruebas</title>
</head>
<body>
<?php
class CabeceraPagina {
  private $titulo;
  private $ubicacion;
  private $colorFuente;
  private $colorFondo;
  public function __construct($tit,$ubi,$colorFuen,$colorFon)
  {
    $this->titulo=$tit;
    $this->ubicacion=$ubi;
    $this->colorFuente=$colorFuen;
    $this->colorFondo=$colorFon;
  }
  public function graficar()
  {
    echo '<div style="font-size:40px;text-align:'.$this->ubicacion.';color:';
    echo $this->colorFuente.';background-color:'.$this->colorFondo.'">';
    echo $this->titulo;
    echo '</div>';
  }
}

$cabecera=new CabeceraPagina('El blog del programador','center','#FF1A00','#CDEB8B');
$cabecera->graficar();
?>
</body>
</html>