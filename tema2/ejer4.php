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

function encriptar($mensaje){

    $clave ='Javi no se como hacer esto muy bien';
    $method = 'aes-256-cbc';
    $iv = base64_decode("C8fBxl1g7EWtYTL1/M8jfstw==");

    return openssl_encrypt(base64_encode($mensaje),$method,$clave,false,$iv);
}



function desencriptar($mensaje){

    $clave ='Javi no se como hacer esto muy bien';
    $method = 'aes-256-cbc';
    $iv = base64_decode("C8fBxl1g7EWtYTL1/M8jfstw==");

    return base64_decode(openssl_decrypt($mensaje,$method,$clave,false,$iv));
}

echo encriptar($mensaje);
echo desencriptar($mensaje);

?>
</body>
</html>