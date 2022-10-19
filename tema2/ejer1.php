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

    $cliente = array("Cosentino", "Garciden", "Deretil", "Makito", "Globomatik");

    function convert($cliente, $opcion) {

        switch ($opcion) {
            case "L":
                return strtolower($cliente);
                break;
            case "U":
                return strtoupper($cliente);
                break;
            case "M":
                return ($cliente);
                break;
        }
    }
    echo convert($cliente[3],"L");
    echo "<br>";
    echo convert($cliente[3],"M");
    echo "<br>";
    echo convert($cliente[3],"U");

    ?>
</body>

</html>