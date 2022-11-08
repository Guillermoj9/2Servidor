<?php session_start();
?>
<?php //session_destroy(); 
?>

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
        <h1>AHORCADO</h1>
    </center>
    <?php
   
    echo  '<center>';
    echo "Letras dichas ";
    foreach ($_SESSION['letras'] as $letra) {
        echo $letra . ", ";
    }
    echo '<br>
<div class="row">
<div class="col-12 ">
   <a class="btn btn-info m-1"href="controlador.php?letra=a">a</a>
   <a class="btn btn-info m-1"href="controlador.php?letra=b">b</a>
   <a class="btn btn-info m-1"href="controlador.php?letra=c">c</a>
   <a class="btn btn-info m-1"href="controlador.php?letra=d">d</a>
   <a class="btn btn-info m-1"href="controlador.php?letra=e">e</a>
   <a class="btn btn-info m-1"href="controlador.php?letra=f">f</a>
   <a class="btn btn-info m-1"href="controlador.php?letra=g">g</a>
   <a class="btn btn-info m-1"href="controlador.php?letra=h">h</a>
   <a class="btn btn-info m-1"href="controlador.php?letra=i">i</a>
   <a class="btn btn-info m-1"href="controlador.php?letra=j">j</a>
   <a class="btn btn-info m-1"href="controlador.php?letra=k">k</a>
   <a class="btn btn-info m-1"href="controlador.php?letra=l">l</a>
   <a class="btn btn-info m-1"href="controlador.php?letra=m">m</a>
   <a class="btn btn-info m-1"href="controlador.php?letra=n">n</a>
   <a class="btn btn-info m-1"href="controlador.php?letra=o">o</a>
   <a class="btn btn-info m-1"href="controlador.php?letra=p">p</a>
   <a class="btn btn-info m-1"href="controlador.php?letra=q">q</a>
   <a class="btn btn-info m-1"href="controlador.php?letra=r">r</a>
   <a class="btn btn-info m-1"href="controlador.php?letra=s">s</a>
   <a class="btn btn-info m-1"href="controlador.php?letra=t">t</a>
   <a class="btn btn-info m-1"href="controlador.php?letra=u">u</a>
   <a class="btn btn-info m-1"href="controlador.php?letra=v">v</a>
   <a class="btn btn-info m-1"href="controlador.php?letra=w">w</a>
   <a class="btn btn-info m-1"href="controlador.php?letra=x">x</a>
   <a class="btn btn-info m-1"href="controlador.php?letra=y">y</a>
   <a class="btn btn-info m-1"href="controlador.php?letra=z">z</a>
</div>
</div>';

    if ($_SESSION['palabra'] == $_SESSION['palabraActual']) {
        ganador();
    } else if ($_SESSION['fallos'] >= 7) {
        perdedor();
    }

    echo "Tu palabra " . $_SESSION["palabraActual"];
    echo "<br>";
    //echo "Fallos: " . $_SESSION["fallos"];

    if ($_SESSION["fallos"] == 0) {
        echo "<img src='imagenes/0.png' height=500px width=450px'>";
    } else if ($_SESSION["fallos"] == 1) {
        echo "<img src='imagenes/1.png' height=500px width=450px'>";
    }else if ($_SESSION["fallos"] == 2) {
        echo "<img src='imagenes/2.png' height=500px width=450px'>";
    }else if ($_SESSION["fallos"] == 3) {
        echo "<img src='imagenes/3.png' height=500px width=450px'>";
    }else if ($_SESSION["fallos"] == 4) {
        echo "<img src='imagenes/4.png' height=500px width=450px'>";
    }else if ($_SESSION["fallos"] == 5) {
        echo "<img src='imagenes/5.png' height=500px width=450px'>";
    }else if ($_SESSION["fallos"] == 6) {
        echo "<img src='imagenes/6.png' height=500px width=450px'>";
    }else if ($_SESSION["fallos"] == 7) {
        echo "<img src='imagenes/7.png' height=500px width=450px'>";
    }

    echo  '</center>';
    ?>
</body>

</html>