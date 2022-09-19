<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
  </head>
  <body>
        <?php
        
          $n = $_POST['n'];
        
    
          if (!isset($n)){           // SI LA VARIABLE N NO ESTÁ INICIADA QUE SE MUESTRE EL FORMULARIO
          ?>
            Introduzca un número entero mayor que 1:
            <form action="multiplos_3.php" method="post">
              <input type="number" name="n" min="1" autofocus="" required=""><br>
              <input type="submit" value="Aceptar">
            </form>
          <?php // SI LA VARIABLE SE HA INICIADO SIGUE POR AQUI
          } else {
            $cuenta = 0;
            $suma = 0;

            for ($i = 1; $i < $n; $i++) {
              if (($i % 5) == 0) {
                echo $i . "<br>";
                $cuenta++;
                $suma += $i;
              }
            }
            echo "<br>Desde 1 hasta $n hay $cuenta múltiplos de 5 y suman $suma.";
          }
        ?>
     
  </body>
</html>