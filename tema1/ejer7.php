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

    $tablas = array (1,2,3,4,5);
    for($i=0; $i<count($tablas); $i++){
    for($j=0; $j<11;$j++){
        echo $tablas[$i]. "*". $j."=".($j*$tablas[$i]);
        echo "<br>";
    }
    
}
    ?>

</body>

</html>