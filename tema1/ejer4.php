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

    $a = 2;
    $b = 3;
    $c = -1;

    echo $resultado = (-$b + sqrt(pow($b, 2) - (4 * $a * $c))) / 2 * $a;
    echo $resultado1 = (-$b - sqrt(pow($b, 2) - (4 * $a * $c))) / 2 * $a;
    echo $resultado;
    echo "<br>";
    echo $resultado1;

    ?>


</body>

</html>