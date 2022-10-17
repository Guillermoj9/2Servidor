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

    function convert($clientes, $opcion) {
       
        if ($opcion == "L"){
            return strtolower($clientes);
            break;
        }else if ($opcion == "U"){
            return strtoupper($clientes);
            break;
        }else {
            return($clientes);
        }




        switch ($opcion) {
            case "L":
                return strtolower($clientes);
                break;
            case "U":
                return strtoupper($clientes);
                break;
            case "M":
                return ($clientes);
                break;
        }
    }
    echo convert($clientes,$opcion);

    ?>
</body>

</html>