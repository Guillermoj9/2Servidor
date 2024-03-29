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
        if ($_REQUEST['accion'] == "mostrarArticulo") {
            $id = unserialize($_SESSION['usuario'])->getId();
            ControladorIA::mostrarArticulo($id);
        }
        
         //CheckLogin
         if ($_REQUEST['accion'] == "checkLogin") {
            $email = filtrado($_REQUEST['email']);
            $password = filtrado($_REQUEST['password']);
            ControladorLogin::chequearLogin($email, $password);
        }
        //NuevoArticulo
        if ($_REQUEST['accion'] == "nuevoArticulo"){
            $texto = $_REQUEST['articulo'] ;
            ControladorIA::mostrarIA($texto);
        }
        //Guardar 
        if ($_REQUEST['accion'] == "guardarArticulo"){
            $titulo = $_REQUEST['titulo'] ;
            $texto = $_REQUEST['texto'] ;
            $imagen = $_REQUEST['imagen'] ;
            $fecha=filtrado(date("d/m/Y"));
            ControladorIA::guardarArticulo($titulo,$texto,urlencode($imagen),$fecha);
        }
        //Destruir sesion
        if ($_REQUEST['accion'] == "destruirSesion") {
            session_destroy();
            echo "<script>window.location='enrutador.php?accion=inicio'</script>";
        }
        
    }
}
