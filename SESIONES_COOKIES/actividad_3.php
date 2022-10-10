<?php
session_start();

if(is_dir("img_actividad_5")){
    echo "true";
}else{
    echo "false";
}

echo "<img src='1.jpg' width='200'>";


//para evitar undefined array key

$n =!empty($_POST['n']) ? $_POST['n'] : null;
$_SESSION['suma'] =!empty($_SESSION['suma']) ? $_SESSION['suma'] : null;
$_SESSION['cuentaNumeros'] =!empty($_SESSION['cuentaNumeros']) ? $_SESSION['cuentaNumeros'] : null;



//$resultado = $condicion ? 'verdadero' : 'falso';

//$n = $_POST['n'];
  if (!isset($n) || ($_SESSION['suma'] <= 10000)) {
  ?>
    <p>
      Este programa muestra la suma, el contador de los números introducidos y la media.<br>
      Vaya introduciendo números, el programa parará cuando la suma de ellos supere 10000.
    </p>
    <form action="" method="post">
      <input type="number" name="n" autofocus required="">
      <input type="submit" value="Aceptar">
    </form>
  <?php
  }

  if (isset($n)) {
    
    $_SESSION['cuentaNumeros']++;
    $_SESSION['suma'] += $n;

    if ($_SESSION['suma'] > 10000) {
        echo "<br><br>Ha introducido ".$_SESSION['cuentaNumeros']." números.<br>";
        echo "La suma es ".number_format($_SESSION['suma'],2)."<br>";
        echo "La media es ".$_SESSION['suma']/$_SESSION['cuentaNumeros']."<br>";
        session_destroy();
    }
  }
?>