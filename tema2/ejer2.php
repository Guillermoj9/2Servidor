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
    $direccionIp = "192.168.11.200";
    $Ip = explode(".", $direccionIp);

    echo $Ip[0];
    echo "<br>";
    echo $Ip[1];
    echo "<br>";
    echo $Ip[2];
    echo "<br>";
    echo $Ip[3];
    
    $newIp = implode(":",$Ip); 
    echo "<br>";
    echo $newIp;
   
    ?>


</body>

</html>