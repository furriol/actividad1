<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <link href="default.css" rel="stylesheet" type="text/css" />
  </head>
  <body>
    <div id="container">
      <div id="header">
        <h1>
          APRENDE PHP CON EJERCICIOS
        </h1>
        <h2>
          SOLUCIONES A LOS EJERCICIOS
        </h2>
        <h2>
          <br>4. Bucles
        </h2>
      </div>

      <div id="content">
        <?php

          if (!isset($_POST["enviar"])){
          ?>
            Introduzca un número entero mayor que 1:
            <form action="ordenar_numeros.php" method="post">
              <input type="number" name="a" min="1" autofocus="" required=""><br>
              <input type="number" name="b" min="1" autofocus="" required=""><br>
              <input type="number" name="c" min="1" autofocus="" required=""><br>
              <input type="submit" name="enviar" value="Aceptar">
            </form>
          <?php
          } else {
            $a = $_POST['a'];
            $b = $_POST['b'];
            $c = $_POST['c'];

            $total=array($a,$b,$c);
            sort($total);
            
            foreach($total as $clave=>$valor){
              echo "El número " . $clave . " es: " . $valor . "<br>";
            }
            }
        ?>
        <br><br>
        <a href="index.php">>> Volver</a>
      </div>
      
      <div id="footer">
        © Luis José Sánchez González
      </div>
    </div>
  </body>
</html>