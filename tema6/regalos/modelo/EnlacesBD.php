<?php

class EnlacesBD {

//SACAMOS TODOS LOS DATOS DE TODOS LOS REGALOS
    public static function getEnlaces($id) {

        $conexion = ConexionBD::conectar();

        //Consulta BBDD
        $stmt = $conexion->prepare("SELECT * FROM enlaces WHERE id_regalo = ?");
        $stmt->bindValue(1, $id);
        $stmt->execute();

        //Usamos FETCH_CLASS para que convierta a objetos las filas de la BD
        $enlaces = $stmt->fetchAll(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'Enlaces');

        ConexionBD::cerrar();
       
        return $enlaces;
    }
    public static function deleteEnlace($id){
        $conexion = ConexionBD::conectar(); 

        //Consulta BBDD

        $stmt = $conexion->prepare("DELETE FROM enlaces WHERE id = ?");

         // Bind
         $stmt->bindValue(1, $id);
         // Ejecuta la consulta
         $stmt->execute();
 
         ConexionBD::cerrar();
    }


    public static function modificarEnlace($nombre,$enlace,$precio,$imagen,$prioridad) {
        $conexion = ConexionBD::conectar();

        $stmt = $conexion->prepare("UPDATE enlaces SET nombre = ?, enlace = ?,precio = ?, imagen = ?, prioridad= ? WHERE id = ?");
        // Bind
        $stmt->bindValue(1, $nombre);
        $stmt->bindValue(2, $enlace);
        $stmt->bindValue(3, $precio);
        $stmt->bindValue(4, $imagen);
        $stmt->bindValue(5, $prioridad);
        // Ejecuta la consulta
        $stmt->execute();

        ConexionBD::cerrar();
}

    public static function nuevoEnlace($nombre,$enlace,$precio,$imagen,$prioridad,$id_regalo) {
        $conexion = ConexionBD::conectar();

        $stmt = $conexion->prepare("INSERT INTO  enlaces (nombre, enlace,precio , imagen , prioridad, id_regalo) VALUES (?,?,?,?,?,?)");
        // Bind
        $stmt->bindValue(1, $nombre);
        $stmt->bindValue(2, $enlace);
        $stmt->bindValue(3, $precio);
        $stmt->bindValue(4, $imagen);
        $stmt->bindValue(5, $prioridad);
        $stmt->bindValue(6, $id_regalo);
        // Ejecuta la consulta
        $stmt->execute();

        ConexionBD::cerrar();
    }
}
