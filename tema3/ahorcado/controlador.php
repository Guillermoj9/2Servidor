<?php session_start(); ?>
<?php //session_destroy(); 
?>

<?php include("lib.php"); ?>

<?php

//EMPEZAR A JUGAR;
if ($_GET) {
//BOTON PARA JUGAR
    if (isset($_GET['accion'])=='jugar') {
        pintarPalabra();
        echo '<script>window.location="' . "index.php" . '"</script>';
    }else {
        //ENTRA JUEGO
        $letraPulsada = $_GET['letra'];
    //BUSCA LA LETRA MARCADA PARA VER SI ESTA EN LA PALABRA
        for($i=0; $i < strlen($_SESSION['palabra']); $i++) {
            if ($_SESSION['palabra'][$i] == $letraPulsada) {
                $_SESSION['palabraActual'][$i] = $letraPulsada;
                array_push($_SESSION['letras'],$letraPulsada);
                echo '<script>window.location="' . "index.php" . '"</script>';
            }
        }
        //SI NO ESTA EN LA PALABRA SUMA UN FALLO
        if (!str_contains($_SESSION['palabra'],$letraPulsada)){
            array_push($_SESSION['letras'],$letraPulsada);
            $_SESSION['fallos']++;
                echo '<script>window.location="' . "index.php" . '"</script>'; 
        }
    }

    //REINTENTAR
    if(isset($_POST['accion'])){
        if($_POST['accion']=='reintentar');
        session_destroy();
        echo '<script>window.location="' . "index.php" . '"</script>';
    }
}

?>