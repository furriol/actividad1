<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
  </head>
  <body>
    
        <?php
          if (!isset($_POST['oportunidades'])) { //cuando no está inicializado se declaran las variables
            $numeroIntroducido = 55555;
            $oportunidades = 4;
          } else {         //cuando si que está iniciado va contando las oportunidades y almacena el número introducido.
            $oportunidades = $_POST['oportunidades'];
            $numeroIntroducido = $_POST['numeroIntroducido'];
          }

          $numeroSecreto = 2405;

          if ($numeroIntroducido == $numeroSecreto) {
            echo "La caja fuerte se ha abierto.";
          } else if ($oportunidades == 0) {
            echo "Lo siento, has agotado todas tus oportunidades. La caja fuerte permanecerá cerrada.";
          } else {
            echo "Te quedan ", $oportunidades, " oportunidades para abrir la caja fuerte.<br>";
            $oportunidades--;
            echo 'Introduce un número de cuatro cifras.";
            echo '<form action="caja_fuerte.php" method="post">';
            echo '<input type="number" min=0 max=9999 name="numeroIntroducido" autofocus>';
            echo '<input type="hidden" name="oportunidades" value="", $oportunidades, '">';
            echo '<input type="submit" value="Continuar">';
            echo '</form>;
          }
        ?>
  
  </body>
</html>