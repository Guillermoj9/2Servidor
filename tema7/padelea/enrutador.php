<?php
session_start();

//AUTOLOAD
function autocarga($clase)
{
    $ruta = "./controladores/$clase.php";
    if (file_exists($ruta)) {
        include_once $ruta;
    }

    $ruta = "./modelo/$clase.php";
    if (file_exists($ruta)) {
        include_once $ruta;
    }

    $ruta = "./vista/$clase.php";
    if (file_exists($ruta)) {
        include_once $ruta;
    }

    $ruta = "./vista/Partida/$clase.php";
    if (file_exists($ruta)) {
        include_once $ruta;
    }

    $ruta = "./vista/Jugador/$clase.php";
    if (file_exists($ruta)) {
        include_once $ruta;
    }
}
spl_autoload_register("autocarga");





//Función para filtrar los campos del formulario
function filtrado($datos)
{
    $datos = trim($datos); // Elimina espacios antes y después de los datos
    $datos = stripslashes($datos); // Elimina backslashes \
    $datos = htmlspecialchars($datos); // Traduce caracteres especiales en entidades HTML
    return $datos;
}


if ($_REQUEST) {
    if (isset($_REQUEST['accion'])) {

         //Inicio - Formulario Login
         if ($_REQUEST['accion'] == "inicio") {
            ControladorLogin::mostrarFormularioLogin();
        }
        //Inicio - error de login
        if ($_REQUEST['accion'] == "error") {
            ControladorLogin::mostrarFormularioLoginError();
        }
        //CheckLogin
        if ($_REQUEST['accion'] == "checkLogin") {
            $email = filtrado($_REQUEST['email']);
            $password = filtrado($_REQUEST['password']);
            ControladorLogin::chequearLogin($email, $password);
        }
        //MOSTRAR PARTIDAS
        if ($_REQUEST['accion'] == "mostrarP") {
            $id = unserialize($_SESSION['usuario'])->getId();
            ControladorPartidas::mostrarPartidas($id);
        }
        //INSERTAR PARTIDA
        if ($_REQUEST['accion'] == "insertarPartida") {
            
            $fecha = filtrado($_REQUEST['fecha']);
            $hora = filtrado($_REQUEST['hora']);
            $ciudad = filtrado($_REQUEST['ciudad']);
            $lugar = filtrado($_REQUEST['lugar']);
            $cubierto = filtrado($_REQUEST['cubierto']);
            $estado = filtrado($_REQUEST['estado']); 
            ControladorPartidas::insertarPartida($fecha, $hora, $ciudad, $lugar, $cubierto,$estado);
        }
        //BORRAR PARTIDA
        if ($_REQUEST['accion'] == "borrarPartida") {
            $id = filtrado($_REQUEST['id']);
            ControladorPartidas::borrarPartida($id);
        }
        //VER ENLACES
        if($_REQUEST['accion'] == "verPartida"){
            $id = filtrado($_REQUEST['id']);
           
            ControladorJugadores::mostrarPartidas($id);
            
        }
        //MODIFICAR
        if($_REQUEST['accion'] == "modificar"){
            $estado = filtrado($_REQUEST['estado']);
            $id = filtrado($_REQUEST['id']);
            ControladorPartidas::modificar($estado,$id);
        }
        //CERRAR SESION
        if ($_REQUEST['accion'] == "destruirSesion") {
            session_destroy();
            echo "<script>window.location='enrutador.php?accion=inicio'</script>";
        }
        
    }


}