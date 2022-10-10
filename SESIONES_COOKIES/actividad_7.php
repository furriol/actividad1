<?php

session_start();
//cierra sesión por inactividad

if (!isset($_SESSION['tiempo'])) {
    $_SESSION['tiempo']=time();
}
else if (time() - $_SESSION['tiempo'] > 5) {
    session_destroy();
    header('Location:www.as.com');
    /* Aquí redireccionas a la url especifica */
    
    die();  
}
$_SESSION['tiempo']=time(); //Si hay actividad seteamos el valor al tiempo actual



  if (!isset($_COOKIE["color"])) {
    setcookie("color", "white", time() + 3 * 24 * 3600);
    $color = "white";
  } else {
    $color = $_COOKIE["color"];
  }
  
  if (isset($_POST['color'])) {
    $color = $_POST['color'];
    setcookie("color", $color, time() + 3 * 24 * 3600);
  }
  ?>
<div id="minipagina" style="padding: 60px;">
    <p>Elige el color de fondo de la página.</p>
    <form action="" method="post">
      <input type="color" name="color" value="<?=$color?>"><br><br>
      <input type="submit" value="Aceptar">
    </form>
  </div>
  <!--
    Se cambia el fondo de una "mini-página" dentro de la página principal para
    no perder la homogeneidad en los estilos respecto al resto de ejercicios.
    Si se quiere cambiar el color de fondo de la página completa, habría que
    cambiar la propiedad background-color de body.
  -->
  <script>document.getElementById("minipagina").style.background="<?=$color?>";</script>