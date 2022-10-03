<?php



$menorp=0;
$mayorp=2;
$resultadop=rand($menorp, $mayorp);
echo $resultadop;

if($resultadop==1){

        echo "He acertadooooo";
}else{

    echo "El resultado no es 1";
}
/*
if(isset($_POST["enviando"])){

    echo "Esto es la segunda prueba";
    $prediccion=$_POST["prediccion"];
    if($prediccion=="Juan"){
        echo "El nombre es Juan";
    }else{
        echo "El nombre no es Juan";
    }
}
*/
if(isset($_POST["enviando"])){

       
        $prediccion=$_POST["prediccion"];
        $menor=0;
        $mayor=2;
        $resultado=rand($menor, $mayor);
        echo $resultado;
//puedo probrar con la función strcmp
        if($prediccion==$resultado){  //¿PORQUE CON TRES IGUALES NO VA?
            echo "Has acertado";
        }else{
            echo "Has fallado, vuelve a intentarlo";
        }

}