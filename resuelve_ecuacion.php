<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
  </head>
  <body>
    

      <div id="content">
        <?php
          $a = 5;
          $b = 5;

          if ($a == 0) {
            echo "Esa ecuación no tiene solución real.";
          } else {
            echo "x = ", (-$b / $a);
          }
        ?>
       
      
    </div>
  </body>
</html>