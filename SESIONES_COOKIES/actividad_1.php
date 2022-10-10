<p>
  Este programa calcula la media de los números positivos introducidos.<br>
  Vaya introduciendo números (puede parar introduciendo un número negativo).
</p>
<?php

  
  session_start();

  
  $n = $_GET['n'];

  if (!isset($n) || ($n > 0)) {
    
    
    

    $_SESSION['total'] += $n;
    $_SESSION['cuentaNumeros']++;

    echo  $_SESSION['total'] . "<br>";
    echo  $_SESSION['cuentaNumeros'] . "<br>";
    ?>

    <form action="#" method="get">
      <input type="hidden" name="ejercicio" value="01">
      <input type="number" name="n" autofocus>
      <input type="submit" value="Aceptar">



    </form>

    <?php
    
  } else {
    
  ?>
    <p>
      La media de los números introducidos es <?php echo $_SESSION['total'] / ($_SESSION['cuentaNumeros']-1); ?>
    </p>
    <?php
    session_destroy();
  }
?>