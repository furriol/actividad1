<?php

  include_once 'dado_poker.php';


?>
<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Dados de Poker</title>
  </head>
  <body>
    <form action="" method="post">

        <label>Click para lanzar el dado</label> <input type="submit" value="Tira el primero" name="envia">
        <label>Click para lanzar el dado 2</label> <input type="submit" value="Tira el segundo" name="envia2">

        <input hidden="<?php $tirada ?>">
        <input hidden="<?php $tirada2 ?>">


    </form>

    <?php
        if(isset($_POST['envia'])){
            $tirada=new DadoPoker;
            $tirada->tira();
            echo DadoPoker::getTiradasTotales();
            echo "<br>";
            echo $tirada->getCara();

        }

        if(isset($_POST['envia2'])){
            $tirada2=new DadoPoker;
            $tirada2->tira();
            echo DadoPoker::getTiradasTotales();
            echo "<br>";
            echo $tirada2->getCara();

        }



    ?>
     
  
  </body>
</html>