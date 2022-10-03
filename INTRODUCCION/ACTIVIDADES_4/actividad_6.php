<h2>Prueba tu vocabulario en inglés</h2>
<?php
  $diccionario = array (
    "ordenador" => "computer",
    "gato" => "cat",      
    "rojo" => "red",
    "árbol" => "tree",
    "pingüino" => "penguin",
    "sol" => "sun",
    "agua" => "water",
    "viento" => "wind",
    "siesta" => "nap",
    "arriba" => "up",
    "ratón" => "mouse",
    "estadio" => "arena",
    "calumnia" => "aspersion",
    "aguacate" => "avocado",
    "cuerpo" => "body",
    "concurso" => "contest",
    "cena" => "dinner",
    "salida" => "exit",
    "lenteja" => "lentil",
    "cacerola" => "pan",
    "pastel" => "pie",
    "membrillo" => "quince"
  );

  $espanol=[];

  if (!isset($_GET['aceptar'])) {
    echo "Por favor, introduzca la traducción al inglés de las siguientes palabras.<br>";

    // Extrae las palabras españolas
    foreach ($diccionario as $clave => $valor) {
      $palabrasEspanolas[] = $clave;
    }

    // Elige 5 palabras en español sin que se repita ninguna
    $contadorPalabras = 0;
    do {
      $palabra = $palabrasEspanolas[rand(0, 19)];
      if (!in_array($palabra, $espanol)) {
        $espanol[] = $palabra;
        $contadorPalabras++;
      }
    } while ($contadorPalabras < 5);

    echo '<form action="juego_ingles.php" method="get">';
  
    //for ($i = 0; $i < 5; $i++) {}

      echo $espanol[1]. " ";
      echo '<input type="hidden" name="espanol[1]" value="' . $espanol[1] . '">';
      echo '<input type="text" name="ingles[1]" ><br>';

      echo $espanol[2]. " ";
      echo '<input type="hidden" name="espanol[2]" value="' . $espanol[2] . '">';
      echo '<input type="text" name="ingles[2]" ><br>';

      echo $espanol[2]. " ";
      echo '<input type="hidden" name="espanol[3]" value="' . $espanol[3] . '">';
      echo '<input type="text" name="ingles[3]" ><br>';

      echo $espanol[4]. " ";
      echo '<input type="hidden" name="espanol[4]" value="' . $espanol[4] . '">';
      echo '<input type="text" name="ingles[4]" ><br>';

      echo $espanol[0]. " ";
      echo '<input type="hidden" name="espanol[0]" value="' . $espanol[0] . '">';
      echo '<input type="text" name="ingles[0]" ><br>';

    
    echo '<input type="submit" value="aceptar" name="aceptar">';
    echo '</form>';
    
  } else {
    $espanol = $_GET['espanol'];
    $ingles = $_GET['ingles'];

    for ($i = 0; $i < 5; $i++) {
      if ($diccionario[$espanol[$i]] == $ingles[$i]) { //ingles es el array que yo he creado.
        echo '<span style="color: green;">'. $espanol[$i] . ": " . $ingles[$i];
        echo " - correcto</span><br>";
      } else {
        echo '<span style="color: red;">'. $espanol[$i] . ": " . $ingles[$i];
        echo " - incorrecto</span>, la respuesta correcta es <b>" . $diccionario[$espanol[$i]] . "</b><br>";
      }
    }
  }