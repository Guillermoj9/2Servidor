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
    $numeros = [];
    for ($i = 0; $i < 7; $i++) {
        for ($j = 0; $j < 7; $j++) {
            if ($i == $j) {
                $numeros[$i][$j] = 1;
            } else {
                $numeros[$i][$j] = rand(1, 9);
            }
        }
    }

    //Calcular suma de las filas
    $sumaFila = [];
    for ($i = 0; $i < 7; $i++) {
        /*
      $sumaF = 0;
      for($j=0; $j<7; $j++) {
          $sumaF += $numeros[$i][$j];
      }
      $sumaFila[$i] = $sumaF;
      */
        $sumaFila[$i] = array_sum($numeros[$i]);
    }
    var_dump($sumaFila);
    echo "<br>";

    //Calcular suma de las columnas
    $sumaColumna = [];
    for ($j = 0; $j < 7; $j++) {
        $sumaColumna[$j] = array_sum(array_column($numeros, $j));
    }
    var_dump($sumaColumna);
    echo "<br>";



    for ($i = 0; $i < 7; $i++) {
        for ($j = 0; $j < 7; $j++) {
            echo $numeros[$i][$j] . " ";
        }
        echo "<br>";
    }
    ?>

</body>

</html>