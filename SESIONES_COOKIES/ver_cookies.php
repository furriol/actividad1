<?php

//Para mostrar el valor de las cookies, tengo que usar $_COOKIE, una varible supergoblal,
//que es un array asociativo.

$_COOKIE['micookie'];

if(isset($_COOKIE['micookie'])){
    echo $_COOKIE['micookie'];
}else{
    echo "No existe la cookie";
}

//para borrar las cookies

//unset($_COOKIE['micookie']);


//también hay que caducarla porque se almacenan en el equipo

//setcookie('micookie','',time()-100);

//para que me rediriga a la página en cuestión

//header('Location:ver_cookies.php');