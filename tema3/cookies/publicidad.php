
<?php
function desencriptar($mensaje, $clave)
{
    //Convierte string en array.
    $letras = str_split($mensaje, 1);
    $nuevaPalabra = "";
    foreach ($letras as $valor) {
        //Convierte el primer byte de un string a un valor entre 0 y 255.
        $conv = ord($valor);
        //Devuelve un caracter especifico
        $nuevaLetra = chr($conv - $clave);
        $nuevaPalabra = $nuevaLetra . $nuevaPalabra;
    }
    return $nuevaPalabra;

}
    echo "Te gusta: ". desencriptar($_COOKIE['servidor'],4);

?> 