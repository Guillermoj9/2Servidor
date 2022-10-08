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
    function pintarCola($cola)
    {
        for ($i = 0; $i < count($cola); $i++) {
            echo $cola[$i] . " ";
        }
        echo "<br>";
    }

    //Añadir a la cola pasandola por referencia
    function addColaR(&$cola, $num, $elem)
    {

        for ($i = 0; $i < $num; $i++) {
            array_push($cola, $elem);
        }
    }

    //Añadir a la cola pasandola por copia
    function addColaC($cola, $num, $elem)
    {

        for ($i = 0; $i < $num; $i++) {
            array_push($cola, $elem);
        }

        return $cola;
    }

    //Elimina num elementos del principio de la cola, se hace por referencia
    function delColaR(&$cola, $num)
    {
        for ($i = 0; $i < $num; $i++) {
            array_shift($cola);
        }
    }

    //Vaciar la cola por referencia
    function vaciarColaR(&$cola)
    {
        $cola = array();
    }

    $miCola = array();
    $miCola = addColaC($miCola, 3, 1);
    pintarCola($miCola);

    addColaR($miCola, 4, 2);
    pintarCola($miCola);

    delColaR($miCola, 2);
    pintarCola($miCola);

    vaciarColaR($miCola);
    pintarCola($miCola);
    ?>


</body>

</html>