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

    $clientes = array("Cosentino", "Garciden", "Deretil", "Makito", "Globomatik");

    function convierteClientes($nombre, $opcion)
    {

        switch ($opcion) {
            case "L":
                return strtolower($nombre);
                break;
            case "U":
                return strtoupper($nombre);
                break;
            case "M":
                return ($nombre);
                break;
        }
    }
    echo convierteClientes($nombre,"L",[3]);

    ?>
</body>

</html>