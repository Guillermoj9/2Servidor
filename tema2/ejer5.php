<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

function encriptar($mensaje, $clave)
    {

        //Le damos la vuelta al mensaje con STRREV.
        $mensajeR = strrev($mensaje);
        echo $mensajeR;
        echo "<br>";
        //Convierte string en array.
        $letras = str_split($mensaje,1);
        foreach ($letras as $valor) {
            //Convierte el primer byte de un string a un valor entre 0 y 255.
            $conv = ord($valor);
            //Devuelve un caracter especifico
            $nuevaLetra = chr($clave + $conv);
            echo $nuevaLetra;
        }
        echo "<br>";
    }



    function desencriptar($mensaje, $clave)
    {
         //Le damos la vuelta al mensaje con STRREV.
        $mensajeR = strrev($mensaje);
        echo $mensajeR;
        echo "<br>";
        //Convierte string en array.
        $letras = str_split($mensaje, 1);

        foreach ($letras as $valor) {
            //Convierte el primer byte de un string a un valor entre 0 y 255.
            $conv = ord($valor);
            //Devuelve un caracter especifico
            $nuevaLetra = chr($conv - $clave);
            echo $nuevaLetra;
        }
    }

    echo encriptar("Todoloquetengoenmividasonmis...ymipalabra", 3);
    echo desencriptar("Wrgrortxhwhqjrhqplylgdvrqplv111|plsdodeud",3);


?>

</body>
</html>