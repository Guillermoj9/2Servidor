<?php

    class PrestamoBD {
        //todos los prestamos 
        public static function getPrestamosTodos() {

            $conexion = ConexionBD::conectar();
    
            //Consulta BBDD
            $stmt = $conexion->prepare("SELECT * FROM prestamos");
    
            $stmt->execute();
    
            //Usamos FETCH_CLASS para que convierta a objetos las filas de la BD
            $prestamos = $stmt->fetchAll(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'Prestamo');
    
            ConexionBD::cerrar();
    
            return $prestamos;
        }
        public static function getPrestamos() {
            $conexion = ConexionBD::conectar();

            //Consulta BBDD
            $stmt = $conexion->prepare("SELECT prestamos.id, prestamos.idusuario, prestamos.idlibro,prestamos.fecha_inicio,prestamos.fecha_fin, usuarios.nombre FROM prestamos JOIN usuarios JOIN libros WHERE prestamos.idlibro = libros.id and prestamos.idusuario = usuarios.id");
            $stmt->execute();
           
            $stmt->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'Prestamo');
            //Usamos FETCH_CLASS para que convierta a objetos las filas de la BD
            $libro = $stmt->fetchAll();

            ConexionBD::cerrar();

            return $libro;
        }

        public static function nuevoPrestamo($prestamo) {
            $conexion = ConexionBD::conectar();

            //Consulta BBDD
            $stmt = $conexion->prepare("INSERT INTO prestamos (fecha_inicio, fecha_fin, idusuario, idlibro, estado) 
                        VALUES (?, ?, ?, ?, ?) " );
            $stmt->bindValue(1,$prestamo->getFecha_inicio());
            $stmt->bindValue(2,$prestamo->getFecha_fin());
            $stmt->bindValue(3,$prestamo->getIdusuario());
            $stmt->bindValue(4,$prestamo->getIdlibro());
            $stmt->bindValue(5,$prestamo->getEstado());

            //echo $stmt->debugDumpParams();
            $stmt->execute();

            ConexionBD::cerrar();
        }

    public static function borrarPrestamo($id){
        $conexion = ConexionBD::conectar();

        $stmt = $conexion->prepare("DELETE FROM prestamos WHERE id = ?");
        // Bind
        $stmt->bindValue(1, $id);
        // Ejecuta la consulta
        $stmt->execute();

        ConexionBD::cerrar();
    }
    
    public static function modificar($estado,$fecha_fin,$id) {
        $conexion = ConexionBD::conectar();

        $stmt = $conexion->prepare("UPDATE prestamos SET estado = ?, fecha_fin = ? WHERE id = ?");
        // Bind
        $stmt->bindValue(1, $estado);
        $stmt->bindValue(2, $fecha_fin);
        $stmt->bindValue(3, $id);
        // Ejecuta la consulta
        $stmt->execute();

        ConexionBD::cerrar();
}


public static function getPrestamosEstado($estado) {
    $conexion = ConexionBD::conectar();

    //Consulta BBDD
    $stmt = $conexion->prepare("SELECT prestamos.id, prestamos.idusuario,prestamos.estado, prestamos.idlibro,prestamos.fecha_inicio,prestamos.fecha_fin, usuarios.nombre FROM prestamos 
    JOIN usuarios JOIN libros WHERE prestamos.idlibro = libros.id and prestamos.idusuario = usuarios.id and estado = ?");
    $stmt->bindValue(1, $estado);
    $stmt->execute();
   
    $stmt->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'Prestamo');
    //Usamos FETCH_CLASS para que convierta a objetos las filas de la BD
    $libro = $stmt->fetchAll();

    ConexionBD::cerrar();

    return $libro;
}

    }
?>