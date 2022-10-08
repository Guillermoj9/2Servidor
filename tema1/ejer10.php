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
        $contador = 0;
        $par = 0;
        for ($i = 0; $i < 10; $i++) {
            $array[$i] = $i;
            if ($array[$i] % 2 == 0) {
                $par = $par + $array[$i];
                $contador+=1;
            } else {
                echo $array[$i] . ",";
            }
            
        }
        echo "<br>";
        echo ($par/$contador);

    ?>
</body>

</html>