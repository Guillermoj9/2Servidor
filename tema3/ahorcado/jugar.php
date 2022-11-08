<?php session_start();?>
<?php //session_destroy(); ?>
<?php include("lib.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ahorcado Guille</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</head>

<body>

    <center>
        <h1>Empieza a jugar al ahorcado</h1>
    </center>
    <div class='row'>

    <center><div class='col-3'>
    <form action="controlador.php" method='get'>
        <div class="mb-3">
        </div>
      <a href="controlador.php?accion=jugar">Jugar!</a>
    </form>
    </center> 
</div>

</div>
