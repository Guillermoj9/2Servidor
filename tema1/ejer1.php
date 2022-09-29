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
$num1= rand(0,100);
$num2= rand(0,100);

$resultado =($num1-$num2);
$resultado1 =($num1/$num2);

echo "La diferencia es", + $resultado;
echo "El resultado de la division es", + $resultado1;

?>



</body>
</html>