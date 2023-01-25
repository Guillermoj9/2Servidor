<?php
session_start();

//AUTOLOAD
function autocarga($clase)
{
    $ruta = "./controlador/$clase.php";
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
            ControladorNoticias::verJuego();
        }
        if ($_REQUEST['accion'] == "verJuego") {
            $id = filtrado($_GET['id']);
            
            ControladorNoticias::verJuegoDetalle($id);
           ControladorNoticias::mostrarNoticias($id,"");
        }
        if ($_REQUEST['accion'] == "comentario") {
            $idJuego = filtrado($_REQUEST['idJuego']); 
            $idNoticia = filtrado($_REQUEST['idNoticia']); 
            $comentario = filtrado($_REQUEST['coment']);
            $nick = filtrado($_REQUEST['nick']);
            ControladorNoticias::mostrarComentario($idJuego, $idNoticia,$comentario,$nick);
        }
        
        //Inicio - error de login
       /* if ($_REQUEST['accion'] == "error") {
            ControladorLogin::mostrarFormularioLoginError();
        }
        
        
         //CheckLogin
         if ($_REQUEST['accion'] == "checkLogin") {
            $email = filtrado($_REQUEST['email']);
            $password = filtrado($_REQUEST['password']);
            ControladorLogin::chequearLogin($email, $password);
        }
        if ($_REQUEST['accion'] == "nuevoArticulo"){
            $texto = $_REQUEST['articulo'] ;
            ControladorIA::mostrarIA($texto);
        }

        //Destruir sesion
        if ($_REQUEST['accion'] == "destruirSesion") {
            session_destroy();
            echo "<script>window.location='enrutador.php?accion=inicio'</script>";
        }
        */
    }
}
