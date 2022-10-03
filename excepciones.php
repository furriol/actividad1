<?php

//Vamos a manejar errores y excepciones (fallos)

//throw para lanzar exepciones y catch para atraparlas
//puede ponerse dentro de un bloque try - catch


//Para capturar excepciones en código susceptible de tener errores.

$x1=1;
$x2=0;
try{
    //Aquí pongo lo que quiero comprobar
    if($x2==0){
    throw new Exception("Errores de lógica");
    }

}

catch(Exception $e){
    echo "Ha habido un error" . $e->getMessage();

}



//Vamoa a capturar errores
//El objeto lanzado debe ser siempre una instancia de la clase Exception

//Capturar el error mediante una excepcion
//Excepcion= evento que ocurre durante la ejecución de un programa y que interrumpe el flujo normal de las sentencias
//Diferencias: una exepcion es un evento que se espera que ocurra
//y permite que continue el programa. Validacion incorrecta, fichero que no existe, fallo conexión BBDD
// Error: problema que no se espera que ocurra, no se puede continuar
//Por ejemplo error de sintaxis o falta de memoria.

//crea una calculadora a través de un formulario, en la que se compruebe que:

    //las divisiones no pueden ser entre 0.
    //Solo se puede introducir valores numéricos.
    //No se puede hacer raíz cuadrada de números negativos

