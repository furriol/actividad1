<html>
<head>
<title>Pruebas</title>
</head>
<body>

<?php
class Calculadora {
  public static function sumar($v1,$v2)
  {
    return $v1+$v2;
  }
  public static function restar($v1,$v2)
  {
    return $v1-$v2;
  }
  public static function multiplicar($v1,$v2)
  {
    return $v1*$v2;
  }
  public static function dividir($v1,$v2)
  {
    //return $v1/$v2;
  }
}


  //Aquí pongo lo que quiero comprobar

  


$x1=10;
$x2=10;

try{
if($x2==0){
  throw new Exception("División entre cero");
  }
  else{
    echo "La division de $x1 y $x2 es:". $x1/$x2;//Calculadora::dividir($x1,$x2);
  }
}catch(Exception $e){
  echo "Ha habido un error " . $e->getMessage();
}

//quito el finally

echo "La suma de $x1 y $x2 es:".Calculadora::sumar($x1,$x2);
echo '<br>';
echo "La diferencia de $x1 y $x2 es:".Calculadora::restar($x1,$x2);
echo '<br>';
echo "La multiplicacion de $x1 y $x2 es:".Calculadora::multiplicar($x1,$x2);
echo '<br>';

?>

</body>
</html>