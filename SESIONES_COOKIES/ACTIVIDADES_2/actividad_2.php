<?php
session_start();
//Crear los productos de la tienda

$productos_tienda = array ( 
    "pen" => array( "nombre" => "Pen 16 GB", "precio" => 9, "imagen" => "Imagen de un pendrive"),
    "boligrafo" => array( "nombre" => "Bolígrafo Bic azul", "precio" => 1, "imagen" => "Imagen de un boli Bic"),
    "disco" => array( "nombre" => "Disco SSD 512 GB", "precio" => 70, "imagen" => "Imagen de un SSD"),
  );

//Recorro el array para mostrar todos los datos

foreach($productos_tienda as $codigo=>$elemento){

    //$codigo es un string
    //$elemento es un array
    echo "Los productos de la tienda son:<br>";
    echo "Nombre del array que contiene los datos: " . $codigo . "<br>"; //muestra el nombre del array
    echo "Nombre: " . $elemento['nombre'] . "<br>";
    echo "Precio: " . $elemento['precio'] . "<br>";
    echo "Imagen: " . $elemento['imagen'] . "<br>";
   

    //Creo el formulario para añadir al carrito

    ?>
    <form action="" method="post">

    <input type="hidden" name="codigo" value="<?=$codigo?>"> <!--Me devuelve el indice del array productos -->

    <input type="hidden" name="accion" value="comprar">

    <input type="submit" value="Añade">

    </form>
<?php
 echo "<br><br>";
}

//Ahora creamos el array del carrito, que será un array que se almacena en la sesión

//Recojo del formulario, la accion (que será "comprar") y el código (que será el nombre del array).
@$accion = $_POST['accion'];
@$codigo = $_POST['codigo'];

//Inicializo el array para que acumule los datos de la sesión. CREO QUE NO HACE FALTA
$_SESSION['carrito'] =!empty($_SESSION['carrito']) ? $_SESSION['carrito'] : null;


// Inicializa el carrito la primera vez. Mismos índices que el original.
if (!isset($_SESSION['carrito'])) {
  $_SESSION['carrito'] = array ("peli1000" => 0, "parkduo" => 0, "viscvan" => 0, "waterexp" => 0);
}

//puedo utilizar el mismo "código" porque el índice del array original y del carrito es el mismo. 
if ($accion == "comprar") {
  $_SESSION['carrito'][$codigo]++;
}

if ($accion == "eliminar") {
  $_SESSION['carrito'][$codigo] = 0;
}

//Recorro el carrito para mostrar su contenido

$total = 0;

    //Recorro el array original, porque los códigos son idénticos en ambos arrays. Así puedo coger los datos y mostrarlos.
  foreach ($productos_tienda as $codigo => $elemento) {

    if ($_SESSION['carrito'][$codigo] > 0) {
      $total = $total + ($_SESSION['carrito'][$codigo] * $elemento['precio']);
      ?>
      <p><?=$elemento['imagen']?></p><br>
      <?=$elemento['nombre']?><br>Precio: <?=$elemento['precio']?> €<br>
      Unidades: <?=$_SESSION['carrito'][$codigo]?>
      
      
      <form action="" method="post">
        <input type="hidden" name="codigo" value="<?=$codigo?>">
        <input type="hidden" name="accion" value="eliminar">
        <input type="submit" value="Eliminar">
      </form><br><br>
      <?php
    }
  }
  ?>
  <b>Total: <?=$total?> €</b>
  

