<?php
//PINTAR PALABRA-----------------------------------------------------------------------------------
function pintarPalabra()
{
    $_SESSION['letras']=array();
    $_SESSION['fallos']=0;
    $_SESSION['palabra'] = palabras();
    $noPalabra = "";
    for ($i = 0; $i < strlen($_SESSION["palabra"]); $i++) {
        $noPalabra .= "#";
    }
    $_SESSION['palabraActual'] = $noPalabra;
}
//PALABRAS PARA JUGAR-----------------------------------------------------------------------------------
function palabras()
{
    //Array con las palabras del ahorcado que aparecen de forma aleatoria
    $_SESSION['palabras'] = ['hola', 'ayuda', 'friki', 'juego', 'amigo', 'fifa', 'ordenador', 'pintar', 'ahorcado'];

    $i = rand(0, 8);
    $palabra = $_SESSION['palabras'][$i];
    return $palabra;
}

//GANADOR-----------------------------------------------------------------------------------
function ganador()
{
    echo 'Has ganado';
    reintentar();
}
//PERDEDOR-----------------------------------------------------------------------------------
function perdedor()
{
    echo "La palabra es: " . $_SESSION["palabra"];
    echo "<br>";
    echo 'Has perdido, intentalo de nuevo';
    reintentar();
}
//REINTENTAR-----------------------------------------------------------------------------------
function reintentar()
{
    echo '<form action="controlador.php?accion=reintentar" method="post">
    <button class="btn btn-secondary m-1 type="submit" name="reintentar">Jugar de nuevo!</button>
    </form>';
}

//LETRA USADA-----------------------------------------------------------------------------------
function letraDicha($letraPulsada)
{

    $letraPul = false;
    foreach ($_SESSION['letras'] as $l) {

        if ($l == $letraPulsada) {
            $letraPul = true;
        }
    }
    if ($letraPul == false) {
        array_push($_SESSION['letras'], $letraPulsada);
    }
}
//PINTAR FALLOS-----------------------------------------------------------------------------------
function fallos($fail)
{
    //IMAGENES DEL AHORCADO
   
}
