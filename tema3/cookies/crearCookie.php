<?php


 function encriptar($mensaje, $clave)
 {

     //Convierte string en array.
     $letras = str_split($mensaje, 1);

     foreach ($letras as $valor) {
         //Convierte el primer byte de un string a un valor entre 0 y 255.
         $conv = ord($valor);
         //Devuelve un caracter especifico
         $nuevaLetra = chr($clave + $conv);
     }
     return $nuevaLetra;

     echo "<br>";
 }

 function desencriptar($mensaje, $clave)
 {
     //Convierte string en array.
     $letras = str_split($mensaje, 1);

     foreach ($letras as $valor) {
         //Convierte el primer byte de un string a un valor entre 0 y 255.
         $conv = ord($valor);
         //Devuelve un caracter especifico
         $nuevaLetra = chr($conv - $clave);
     }
     return $nuevaLetra;

 }
//Si he pinchado en un link
if ($_GET) {

    if (isset($_COOKIE["servidor"])) {
        //Leemos lo que ya te gusta
        $gustos = $_COOKIE['servidor'];

        //Aquí desencriptar los datos
        $gustos = desencriptar($gustos,4);
        //Separar los gustos y meterlos en un array
        $gustosArray = explode("#",$gustos);

        //CreacionCookie # moda-2 # deportes-2  # juegos-0

        for($i=1; $i<count($gustosArray); $i++) {
            //Separa moda de 1
            
            $gustoContadorArray = explode("-",$gustosArray[$i]);
            //Separamos por un lado moda (posición 0) y por otro el contador (posición 1)

            if ($_GET['interes'] == $gustoContadorArray[0]) {
                $gustoContadorArray[1]++;
            }

            $gustosArray[$i] = implode("-", $gustoContadorArray);
        }

        //Volvemos a convertir a string ya quitados los duplicados
        $gustosString = implode("#", $gustosArray);
        
        
        //Aquí encriptas los datos 
        $gustosString = encriptar($gustosString, 4);

        //-----

        //Creación de la cookie
        setcookie('servidor',$gustosString, time()+60000, "/tema3", "localhost", false, true);
        //echo "Cookie creada";
    } else {
        //Primera vez que entra
        setcookie('servidor',encriptar("CreacionCookie#moda-0#deporte-0#juegos-0",4), time()+60000, "/tema3", "localhost", false, true);
    }


    header("Location: index.php");
}

?>