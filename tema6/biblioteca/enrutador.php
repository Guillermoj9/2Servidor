<?php

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

    $ruta = "./vistas/libros/$clase.php";
    if (file_exists($ruta)) {
        include_once $ruta;
    }

    $ruta = "./vistas/prestamos/$clase.php";
    if (file_exists($ruta)) {
        include_once $ruta;
    }

    $ruta = "./vistas/usuarios/$clase.php";
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
            controladorLibro::mostrarLibros();
        }
        if ($_REQUEST['accion'] == "verTodosPrestamos") {
            ControladorPrestamos::mostrarTodosPrestamos();
        }
        if($_REQUEST['accion'] == "borrarPrestamo"){
            ControladorPrestamos::borrarPrestamo($_GET['id']);
            echo "<script>window.location='enrutador.php?accion=verTodosPrestamos'</script>";
        }
        if ($_REQUEST['accion'] == "verFormulario") {
            ControladorPrestamos::mostrarPrestamos();
        }
        if ($_REQUEST['accion'] == "nuevoPrestamo") {
            $fecha_inicio = filtrado($_REQUEST['fecha_inicio']);
            $fecha_fin = filtrado($_REQUEST['fecha_fin']);
            $idusuario = filtrado($_REQUEST['idusuario']);
            $idlibro = filtrado($_REQUEST['idlibro']);
            $estado = filtrado($_REQUEST['estado']);
            //$prestamo = new Prestamo($fecha_inicio, $fecha_fin, $idusuario, $idlibro, $estado);
            ControladorPrestamos::insertarPrestamo($fecha_inicio, $fecha_fin, $idusuario, $idlibro, $estado);
        }
        if($_REQUEST['accion'] == "modificar"){
            $estado = filtrado($_REQUEST['estado']);
            $fecha_fin = filtrado($_REQUEST['fecha_fin']);
            $id = filtrado($_REQUEST['id']);
            ControladorPrestamos::modificar($estado,$fecha_fin,$id);
        }
        if ($_REQUEST['accion'] == "buscarEstado"){
            $estado = filtrado($_REQUEST['estado']);
            ControladorPrestamos::getPrestamosEstado($estado);
        }
    }
}
