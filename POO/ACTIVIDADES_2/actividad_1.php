<html>
<head>
<title>POO_full_5</title>
</head>
<body>

<form method="post" action="#">
<input type="number" name="filas" value=""> 
<input type="number" name="columnas" value=""> 

<input type="text" name="número" value="">

<input type="submit" value="Enviar">

</form>

<?php

$mat[];
/*Clase tabla*/
class Tabla {
/*Las variables al ser una sola clase son private*/
  private $mat=array();

/*Definimos un atributo $mat como array (matriz) a la que pasaremos los parámetros*/
  private $cantFilas;
  private $cantColumnas;

/*Inicializamos el objeto contruyendo la tabla con las filas y columnas*/
  public function __construct($fi,$co)
  {

/*Llenamos los parámetros referenciando los atributos*/
    $this->cantFilas=$fi;
    $this->cantColumnas=$co;
  }

/*La función cargar contiene cada celda de la tabla*/
  public function cargar($fila,$columna,$valor)
  {

/*Llenamos el atributo mat que es un array con los valores $fila y $columna que devolverán valor*/
    $this->mat[$fila][$columna]=$valor;
  }
 
  public function inicioTabla()
  {
/*El inicio de Tabla no devuelve más que la cabecera*/
    echo '<table border="1">';
  }
     
  public function inicioFila()
  {
/*Idem con fin de la etiqueta*/
    echo '<tr>';
  }
 
  public function mostrar($fi,$co)
  {
/*Mostramos la matriz mat con sus valores*/
    echo '<td>'.$this->mat[$fi][$co].'</td>';
  }
 
  public function finFila()
  {
/*Fin de la fila*/
    echo '</tr>';
  }
 
  public function finTabla()
  {
/*Idem FIN*/
    echo '</table>';
  }


/*Funcion sin parámetros*/
  public function graficar()
  {
/*Inicializamos la tabla imprimiendo la cabecera*/
    $this->inicioTabla();
/*Recorremos el atributo cantFilas que es llenado con cargar*/
    for($f=1;$f<=$this->cantFilas;$f++)
    {
/*Inicializamos fila y llamamos al método inicioFila*/
      $this->inicioFila();
/*Completamos las columnas con el atributo cantFilas*/
      for($c=1;$c<=$this->cantColumnas;$c++)
      {
/*Se devuelve el método mostrar con valores, como se definen al construir la clase no generamos valores ($f y $c)*/
        $this->mostrar($f,$c);
      }
/*Se imprime el fin de la fila*/
      $this->finFila();
    }
/*Se imprime el fin de la tabla*/
    $this->finTabla();
  }
}


$filas=$_POST['filas'];
$columnas=$_POST['columnas'];

/*Dimensiones de la tabla*/
/*Llenar con 
1er Parámetro = cantidad de filas
2do Parámtetro = cantidad de columnas */
$tabla1=new Tabla($filas,$columnas);
/*
Se completa el objeto con los valores de la tabla
 */
$tabla1->cargar(1,1,"1");
/*Detalle de parámetros
Parámetro 1 = Valor de la fila
Parámetro 2 = Valor de la Columna
Parámetro 3 = Valor impreso en Celda */
$tabla1->cargar(1,2,"2");
$tabla1->cargar(1,3,"3");
$tabla1->cargar(2,1,"4");
$tabla1->cargar(2,2,"5");
$tabla1->cargar(2,3,"6");
$tabla1->graficar();
?>
</body>
</html>