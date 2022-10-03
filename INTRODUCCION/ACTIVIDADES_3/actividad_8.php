<?php

//$nombre=$_POST["nombre"];
//$apellido=$_POST["apellido"];
//$DNI=$_POST["DNI"];

$array=array(
    "Nombre"=>$_POST["nombre"],
    "Apellido"=>$_POST["apellido"],
    "DNI"=>$_POST["DNI"]
);

?>
<form action="formulario.php" method="post">
    <label>Nombre</label> <input type="text" name="nombre">
    <label>Apellido</label> <input type="text" name="apellido">
    <label>DNI</label> <input type="number" name="DNI">
    <input type="submit" name="Aceptar" value="Aceptar">

<?php

if(isset($_POST["Aceptar"])){

    foreach($array as $clave=>$valor){
        echo "A $clave le corresponde $valor <br>";
    }

}

?>