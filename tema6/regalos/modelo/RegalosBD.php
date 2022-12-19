<?php

class RegalosBD {

//SACAMOS TODOS LOS DATOS DE TODOS LOS REGALOS
    public static function getRegalos($id) {

        $conexion = ConexionBD::conectar();

        //Consulta BBDD
        $stmt = $conexion->prepare("SELECT * FROM regalos WHERE id_usuario = ?");
        $stmt->bindValue(1, $id);
        $stmt->execute();

        //Usamos FETCH_CLASS para que convierta a objetos las filas de la BD
        $regalos = $stmt->fetchAll(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'Regalos');

        ConexionBD::cerrar();
       
        return $regalos;
    }


    public static function deleteRegalo($id){
        $conexion = ConexionBD::conectar(); 

        //Consulta BBDD

        $stmt = $conexion->prepare("DELETE FROM regalos WHERE id = ?");

         // Bind
         $stmt->bindValue(1, $id);
         // Ejecuta la consulta
         $stmt->execute();
 
         ConexionBD::cerrar();
    }

    public static function crearRegalo($regalos){
        $conexion = ConexionBD::conectar();

        //Consulta BBDD
        $stmt = $conexion->prepare("INSERT INTO regalos (nombre, destinatario, precio, estado, year , id_usuario) 
                    VALUES (?, ?, ?, ?, ?, ?) " );
        $stmt->bindValue(1,$regalos->getNombre());
        $stmt->bindValue(2,$regalos->getDestinatario());
        $stmt->bindValue(3,$regalos->getPrecio());
        $stmt->bindValue(4,$regalos->getEstado());
        $stmt->bindValue(5,$regalos->getYear());
        $stmt->bindValue(6,$regalos->getId_usuario());
        //echo $stmt->debugDumpParams();
        $stmt->execute();

        ConexionBD::cerrar();
    }

    public static function modificar($nombre, $destinatario, $precio, $estado, $year,$id){
        $conexion = ConexionBD::conectar();

        //Consulta BBDD
        $stmt = $conexion->prepare("UPDATE regalos SET nombre = ? , destinatario = ? , precio = ? , estado = ? , year = ? WHERE id = ?");
                    
        $stmt->bindValue(1, $nombre);
        $stmt->bindValue(2, $destinatario);
        $stmt->bindValue(3, $precio);
        $stmt->bindValue(4, $estado);
        $stmt->bindValue(5, $year);
        $stmt->bindValue(6, $id);
        //echo $stmt->debugDumpParams();
        $stmt->execute();

        ConexionBD::cerrar();
    }
}
    ?>