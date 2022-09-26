<?php

$comunidades=array(

    array("Comunidad" =>"Comunidad Valenciana", "Capital"=>"Valencia", "Plato típico"=>"Paella", "Fiesta popular"=>"Fallas"),
    array("Comunidad" =>"Andalucía", "Capital"=>"Sevilla", "Plato típico"=>"Gazpacho", "Fiesta popular"=>"Feria"),
    array("Comunidad" =>"Asturias", "Capital"=>"Oviedo", "Plato típico"=>"Fabada", "Fiesta popular"=>"Descenso del sella")
);

$numero=count($comunidades);

echo "Tenemos almacenadas " . $numero . " comunidades autónomas";

if(isset($_POST["enviar"])){

    $id=$_POST["opcion"];



    echo "Nombre de la comunidad: " . $comunidades[$id]["Comunidad"] . "<br>";
    echo "Nombre de la capital: " . $comunidades[$id]["Capital"] . "<br>";
    echo "Nombre del plato típico: " . $comunidades[$id]["Plato típico"] . "<br>";
    echo "Nombre del plato típico: " . $comunidades[$id]["Fiesta popular"] . "<br><br><br><br>";

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="#" method="post"><br>
        <label>¿Que capital quieres conocer?:</label>
        
    <select id="cars" name="opcion">

    <option value="0">Comunidad Valenciana</option>
    <option value="1">Andalucía</option>
    <option value="2">Asturias</option>

  </select>
        
        <input type="submit" name="enviar" value="Descubre">
</form>
</body>
</html>