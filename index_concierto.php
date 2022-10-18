<?php
  session_start();

  include_once 'zona.php';

  //Al inicio, creo un objeto por cada zona que haya en el concierto. Empleo "Serialize"

  if (!isset($_SESSION['zonas'])) {
    $_SESSION['zonas'] = serialize(array(new Zona("Pista", 3000), new Zona("Grada", 5000),new Zona("VIP", 500)));
  }

  //Para poder utilizar los objetos guardados en la variable sesión debo emplear "unserialize"

  $zonas = unserialize($_SESSION['zonas']);
?>

<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Concierto Melendi</title>
  </head>
  <body>
  <hr><hr>
    <?php
    //Cuando envio el formulario recojo los datos para mostrar el número de entradas y zona en la que han sido vendidas.

    //Zona seleccionada será 0, 1 o 2. Corresponde con el array indexado en el cual se encuentran la información sobre las entradas.
    
      $zonaSeleccionada = $_POST['zonaSeleccionada'];
      $numeroDeEntradas = $_POST['numeroDeEntradas'];
      
      if (isset($zonaSeleccionada)) {
        if ($zonas[$zonaSeleccionada]->vende($numeroDeEntradas)) {
          echo "<h1>" . $numeroDeEntradas . " entradas vendidas en " . $zonas[$zonaSeleccionada]->getDescripcion(). "</h1><br><br>";
          header("Refresh:3");
        } else {
          echo "Lo siento, no se ha podido realizar la venta.";
          header("Refresh:3");
        }
      }


      // Muestra toda la información de las zonas. Cada zona es un objeto, en el cual está almacenada la información.
      foreach ($zonas as $z) {
        echo $z;
      }
      
      // Guarda toda la información de las zonas en la sesión
      $_SESSION['zonas'] = serialize($zonas);
      ?>
  
      <!-- Formulario de venta -->
      <h2>Venta de entradas</h2>
      <form action="" method="POST">
        Nº de entradas:
        <input type="number" name="numeroDeEntradas" min="1" autofocus="" size="4">;
        <select name="zonaSeleccionada">
          <?php
            $i = 0;
            foreach ($zonas as $z) {
              echo '<option value=" ' . $i . ' ">' . $z->getDescripcion() . '</option>';
              $i++;
            }
          ?>
        </select>
        <input type="submit" value="Vender">
      </form>
      
  </body>
</html>