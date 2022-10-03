<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <link href="default.css" rel="stylesheet" type="text/css" />
  </head>
  <body>
      <?php
        $n = $_POST['n'];
        
        if ((!isset($n)) || ($n < 0)){
        ?>
          Por favor, introduzca un número entero positivo.<br>
          <form action="" method="post">
            <input type="number" name="n" min="-100" autofocus=""><br>
            <input type="submit" value="Aceptar">
          </form>
        <?php
        } else {
          $suma = 0;
      
          for ($i = $n + 1; $i < $n + 101; $i++) {
            $suma += $i;
          }
          
          echo "La suma de los 100 números enteros siguientes a $n es $suma";
        }
        ?>
       
  </body>
</html>