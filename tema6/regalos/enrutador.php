<?php
//session_start();

//AUTOLOAD
function autocarga($clase)
{
    $ruta = "./controladores/$clase.php";
    if (file_exists($ruta)) {
        include_once $ruta;
    }

    $ruta = "./modelos/$clase.php";
    if (file_exists($ruta)) {
        include_once $ruta;
    }

    $ruta = "./vistas/Regalos/$clase.php";
    if (file_exists($ruta)) {
        include_once $ruta;
    }

    $ruta = "./vistas/Enlaces/$clase.php";
    if (file_exists($ruta)) {
        include_once $ruta;
    }

    $ruta = "./vistas/Usuarios/$clase.php";
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

        //Inicio
        if ($_REQUEST['accion'] == "inicio") {
            ControladorRegalos::mostrarRegalos();
        }


        /*/Login usuario
        if ($_REQUEST['accion'] == "login") {
            $email = filtrado($_REQUEST['email']);
            $password = filtrado($_REQUEST['password']);
            ControladorUsuario::login($email, $password);
        }
        */
        /*/Destruir sesion
        if ($_REQUEST['accion'] == "destruirsesion") {
            session_destroy();
            echo "<script>window.location='enrutador.php?accion=inicio'</script>";
        }
        */
    }
}
