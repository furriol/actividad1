<?php
  session_start();

  include_once 'dado_poker.php';

  // Si los dados no están creados, se crean 5 y se guardan en una sesión. Para poder guardarlo en la sesión tengo que emplear la función "serialize"
  if (!isset($_SESSION['misDados'])) {
    $_SESSION['misDados'] = serialize(array(new DadoPoker(), new DadoPoker(), new DadoPoker(), new DadoPoker(), new DadoPoker()));
  }

  //Si no se ha realizado ninguna tirada, defino el número de tiradas totales a cero.
  if (!isset($_SESSION['tiradasTotales'])) {
    $_SESSION['tiradasTotales'] = 0;
  }
  
  // Se actualizan los objetos y la clase con los datos de la sesión. Tengo que aplicar la función "unserialize"
  $misDados = unserialize($_SESSION['misDados']);

  //obtengo el número de tiradas totales
  DadoPoker::setTiradasTotales($_SESSION['tiradasTotales']);
?>
<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Dados de Poker</title>
  </head>
  <body>
    <?php
      echo "Dados: ";

      //recorrro el array $misdados, que es donde tengo los 5 objetos que representan los 5 dados.
      foreach ($misDados as $dado) {
        $dado->tira();
        echo ($dado->nombreFigura())." ";
      }

      echo "<br>Tiradas de dados totales: ".(DadoPoker::getTiradasTotales());
      echo "<br>Tiradas de cubilete: ".(DadoPoker::getTiradasTotales() / 5);

      
      // Se actualiza la sesión con los datos de los objetos y la clase
      $_SESSION['misDados'] = serialize($misDados);
      $_SESSION['tiradasTotales'] = DadoPoker::getTiradasTotales();
    ?>
    <br><br>Pulsa <b>F5</b> para seguir tirando el dado.
  </body>
</html>