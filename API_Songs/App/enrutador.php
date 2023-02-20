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

    $ruta = "./vistas/$clase.php";
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
          //Destruir sesion
          if ($_REQUEST['accion'] == "destruirSesion") {
            session_destroy();
            echo "<script>window.location='enrutador.php?accion=inicio'</script>";
        }
       //Mostrar Canciones
        if ($_REQUEST['accion'] == "mostrarCancion") {
            $token = implode($_SESSION['token']);
            ControladorCanciones::mostrarCanciones($token);
        }
        //Mostrar TopCanciones
        if ($_REQUEST['accion'] == "mostrarTop") {
            $token = implode($_SESSION['token']);
            ControladorCanciones::mostrarTop($token);
        }
        //Sumar nota
        if ($_REQUEST['accion'] == "puntuar") {
            $token = implode($_SESSION['token']);
            $id = filtrado($_REQUEST['id']);
            $assessment = filtrado($_REQUEST['valoracion']);
            ControladorCanciones::puntuar($token,$id,$assessment);
        }      
    }
}
