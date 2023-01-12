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

    $ruta = "./vista/Regalos/$clase.php";
    if (file_exists($ruta)) {
        include_once $ruta;
    }

    $ruta = "./vista/Enlaces/$clase.php";
    if (file_exists($ruta)) {
        include_once $ruta;
    }

    $ruta = "./vista/Usuarios/$clase.php";
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
        if ($_REQUEST['accion'] == "mostrarR") {
            $id = unserialize($_SESSION['usuario'])->getId();
            ControladorRegalos::mostrarRegalos($id);
        }
        
         //CheckLogin
         if ($_REQUEST['accion'] == "checkLogin") {
            $email = filtrado($_REQUEST['email']);
            $password = filtrado($_REQUEST['password']);
            ControladorLogin::chequearLogin($email, $password);
        }
        if ($_REQUEST['accion'] == "borrarRegalo") {
            $id = filtrado($_REQUEST['id']);
            ControladorRegalos::borrarRegalo($id);
        }
        if ($_REQUEST['accion'] == "insertarRegalo") {
            
            $id_usuario = filtrado($_REQUEST['id_usuario']);
            $nombre = filtrado($_REQUEST['nombre']);
            $destinatario = filtrado($_REQUEST['destinatario']);
            $precio = filtrado($_REQUEST['precio']);
            $estado = filtrado($_REQUEST['estado']);
            $year = filtrado($_REQUEST['year']);
            ControladorRegalos::crearRegalo($nombre, $destinatario, $precio, $estado, $year,$id_usuario);
        }
        if ($_REQUEST['accion'] == "modificarRegalo") {
            
            $nombre = filtrado($_REQUEST['nombre']);
            $destinatario = filtrado($_REQUEST['destinatario']);
            $precio = filtrado($_REQUEST['precio']);
            $estado = filtrado($_REQUEST['estado']);
            $year = filtrado($_REQUEST['year']);
            $id = filtrado($_REQUEST['id']);
            ControladorRegalos::modificar($nombre, $destinatario, $precio, $estado, $year,$id);
        }

       /* if ($_REQUEST['accion'] == "verEnlaces") {
            ControladorEnlaces::mostrarEnlaces(); 
        }*/
        if ($_REQUEST['accion'] == "borrarEnlace") {
            $id = filtrado($_REQUEST['id_Enlace']);
            $id_regalo = filtrado($_REQUEST['id']);
            ControladorEnlaces::borrarEnlaces($id,$id_regalo);
            
        }
        if ($_REQUEST['accion'] == "insertarEnlace") {
            $nombre = filtrado($_REQUEST['nombre']);
            $enlace = filtrado($_REQUEST['enlace']);
            $precio = filtrado($_REQUEST['precio']);
            $imagen = filtrado($_REQUEST['imagen']);
            $prioridad = filtrado($_REQUEST['prioridad']);
            $id_regalo = filtrado($_REQUEST['id']);
            ControladorEnlaces::crearEnlace($nombre,$enlace,$precio,$imagen,$prioridad,$id_regalo);
        }
        
        if($_REQUEST['accion'] == "verEnlaces"){
            $id = filtrado($_REQUEST['id']);
            ControladorEnlaces::mostrarEnlaces($id);
            
        }

        /*/Login usuario
        if ($_REQUEST['accion'] == "login") {
            $email = filtrado($_REQUEST['email']);
            $password = filtrado($_REQUEST['password']);
            ControladorUsuario::login($email, $password);
        }
        */
        //Destruir sesion
        if ($_REQUEST['accion'] == "destruirSesion") {
            session_destroy();
            echo "<script>window.location='enrutador.php?accion=inicio'</script>";
        }
        
    }
}
