<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <link href="default.css" rel="stylesheet" type="text/css" />
  </head>
  <body>
    <div id="container">
      
    
        <?php
          $h = 1000;
          $g = 9.81;
          $s = sqrt(2 * $h / $g);

          echo "El objeto tarda " . round($s, $precision = 2) . " segundos en caer.";
        ?>
     
       
  </body>
</html>