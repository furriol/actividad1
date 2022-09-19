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
         $a = $_POST['a'];
            $b = $_POST['b'];
        $c = $_POST['c'];
        
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
            $total=sort($_POST);
            echo $total;
            echo "Hola";}
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