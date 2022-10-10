<?php
 session_start();

 $_SESSION['start']=time();
 $_SESSION['finish']=$_SESSION['start']+60;

 echo $_SESSION['start'];
 echo "<br>";
 echo $_SESSION['finish'];

 if((time()-$_SESSION['time'])<60){
    echo "te has pasado";
 }

