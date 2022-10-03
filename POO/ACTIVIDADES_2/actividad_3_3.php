<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Vehículos</title>
    </head>
    <body>
		<?php
			
			 include_once 'bicicleta.php';
			 include_once 'coche.php';
			 
			 // crea una bicicleta con 21 marchas
			 $miBici = new Bicicleta("21");
			 
			 // crea un coche con 1900cc de cilindrada
			 $miCoche = new Coche(1900);
			 
			 $miBici->recorre(40); //funcion publica
			 $miCoche->recorre(200); //funcion publica

			 echo $miBici->hazCaballito()."<br>"; //propia de la clase
			 echo $miCoche->quemaRueda()."<br>"; //propia de la clase
			 
			 $miBici->recorre(60); //funcion publica de vehiculo que como es estática no hace falta crear un objeto de la clase vehículo

			 echo "Mi bici ha recorrido ".$miBici->getKmRecorridos()." Km<br>"; //funcion publica de la clase vehiculo, que hereda la bici
			 echo "Mi coche ha recorrido ".$miCoche->getKmRecorridos()." Km<br>"; //funcion pública de la clase vehiculo, que hereda el coche.


			 echo "Se han creado un total de ".Vehiculo::getVehiculosCreados()." vehículos<br>"; //funciones estáticas de vehiculo 
			 echo "Todos los vehículos han hecho un total de ".Vehiculo::getKmTotales()." Km<br>"; //funciones estáticas de vehiculo
		?>
    </body>
</html>