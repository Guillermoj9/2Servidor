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

$lista_ES = array("amigo","mechero","sol","pastilla","ordenador","mesa","papel","agua","fiesta","cerveza");
$lista_EN = array("friend","lighter","sun","pill","computer","table","paper","water","party","beer");


function dicc($lista_ES,$lista_EN){
    $palabra = "ordenador";
for ($i=0; $i<count($lista_ES);$i++){
    if ($lista_ES[$i]==$palabra){
        return $lista_EN[$i];
    }else 
        echo "-";
}
}
echo dicc($lista_ES,$lista_EN);

?>


</body>
</html>