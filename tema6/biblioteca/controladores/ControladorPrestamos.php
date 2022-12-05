<?php
class ControladorPrestamos
{

    public static function mostrarTodosPrestamos()
    {
        //LLamar al modelo para obtener todas los prestamos en un array.
        $prestamos = PrestamoBD::getPrestamosTodos();
        $usuarios = UsuarioBD::getUsuario();
        $libros = LibroBD::getLibros();
        //Llamar a una vista para pintar ese prestamo
        VistaTodosPrestamos::render($prestamos,$usuarios,$libros);
    }
    public static function mostrarPrestamos()
    {
        //LLamar al modelo para obtener todos los prestamos de un libro
        $libro = LibroBD::getLibros();
        $usuario = UsuarioBD::getUsuario();
        //Llamar a una vista para pintar ese libro con sus prestamos
        VistaFormulario::nuevoPrestamo($libro,$usuario);
    }
    
    public static function insertarPrestamo($fecha_inicio, $fecha_fin, $idusuario, $idlibro, $estado)
    {
        $prestamo = new Prestamo($fecha_inicio, $fecha_fin, $idusuario, $idlibro, $estado);
        PrestamoBD::nuevoPrestamo($prestamo);
        echo "<script>window.location='enrutador.php?accion=verTodosPrestamos'</script>";
    }

    public static function borrarPrestamo($id)
    {
         PrestamoBD::borrarPrestamo($id);
    }

    public static function modificar($estado, $fecha_fin,$id)
    {
         PrestamoBD::modificar($estado, $fecha_fin,$id);
         echo "<script>window.location='enrutador.php?accion=verTodosPrestamos'</script>";
    }

    public static function getPrestamosEstado($estado){
        PrestamoBD::getPrestamosEstado($estado);
        echo "<script>window.location='enrutador.php?accion=verTodosPrestamos'</script>";
    }
}
