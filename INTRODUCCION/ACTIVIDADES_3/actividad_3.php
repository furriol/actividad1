<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    
  </head>
  <body>
    
        <?php
          $a = 1;
          $b = 1;
          $c = 1;

          
          // 0x^2 + 0x + 0 = 0

          if (($a == 0) && ($b == 0) && ($c == 0)) {
            echo  "La ecuación tiene infinitas soluciones.";
          }

          
          // 0x^2 + 0x + c = 0  con c distinto de 0

          if (($a == 0) && ($b == 0) && ($c != 0)) {
            echo  "La ecuación no tiene solución.";
          }

          
          // ax^2 + bx + 0 = 0  con a y b distintos de 0

          if (($a != 0) && ($b != 0) && ($c == 0)) {
            echo  "x<sub>1</sub> = 0";
            echo  "<br>x<sub>2</sub> = ", (-$b / $a);
          }


          // 0x^2 + bx + c = 0  con b y c distintos de 0

          if (($a == 0) && ($b != 0) && ($c != 0)) {
                  echo  "x<sub>1</sub> = x<sub>2</sub> = ", (-$c / $b);
          }

          
          // ax^2 + bx + c = 0  con a, b y c distintos de 0

          if (($a != 0) && ($b != 0) && ($c != 0)) {  

            $raiz = ($b * $b) - (4 * $a * $c);

            if ($raiz < 0) {
              echo  "La ecuación no tiene soluciones reales";
            } else {
              echo  "x<sub>1</sub> = ", (-$b + sqrt($raiz)) / (2 * $a);
              echo  "<br>x<sub>2</sub> = ", (-$b - sqrt($raiz)) / (2 * $a);
            }
          }
        ?>
        
  </body>
</html>