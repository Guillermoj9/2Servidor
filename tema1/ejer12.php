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

    $dicc = array("agua"=>"water","sol"=>"sun","fuego"=>"fire","tierra"=>"earth","ciudad"=>"city","moto"=>"motorbike","ordenador"=>"computer","nube"=>"cloud","desarrollador"=>"developer");


    $palabra="ordenador";

    if(array_key_exists($palabra,$dicc)){
        echo $dicc[$palabra];
    }else{
        echo "La palabra no existe";
    }

?>


</body>
</html>