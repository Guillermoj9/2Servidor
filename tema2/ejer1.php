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

$clientes = array(
    array( "nombre" => "Cosentino"),
    array( "nombre" => "Garciden"),
    array( "nombre" => "Deretil"),
    array( "nombre" => "Makito"),
    array( "nombre" => "Globomatik")
);
foreach($clientes as $nombre) {
    echo "<tr>";
    echo "<td>" ."<br>". $nombre['nombre'] . "</td>";

}
    function convierteClientes($nombres,$opcion){
        $letra="";
        if($letra == "L"){
          echo  strtolower($nombres);
        }else if ($letra == "U"){
            echo strtoupper($nombres);
        }else if ($letra == "M"){
            
        }
    }

    echo convierteClientes($clientes)

    ?>
</body>

</html>