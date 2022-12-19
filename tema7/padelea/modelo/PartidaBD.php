<?php

class PartidaBD {
//SACAMOS TODOS LOS DATOS DE TODOS LOS LIBROS
    public static function getPartida() {

        $conexion = ConexionBD::conectar();

        //Consulta BBDD
        $stmt = $conexion->prepare("SELECT * FROM partidas ORDER BY fecha DESC");

        $stmt->execute();

        //Usamos FETCH_CLASS para que convierta a objetos las filas de la BD
        $partidas = $stmt->fetchAll(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'Partida');

        ConexionBD::cerrar();

        return $partidas;
    }

    public static function deletePartida($id){
        $conexion = ConexionBD::conectar(); 

        //Consulta BBDD

        $stmt = $conexion->prepare("DELETE FROM partidas WHERE id = ?");

         // Bind
         $stmt->bindValue(1, $id);
         // Ejecuta la consulta
         $stmt->execute();
 
         ConexionBD::cerrar();
    }

    public static function crearPartida($partidas){
        $conexion = ConexionBD::conectar();

        //Consulta BBDD
        $stmt = $conexion->prepare("INSERT INTO partidas (fecha, hora, ciudad, lugar, cubierto , estado) 
                    VALUES (?, ?, ?, ?, ?, ?) " );
        $stmt->bindValue(1,$partidas->getFecha());
        $stmt->bindValue(2,$partidas->getHora());
        $stmt->bindValue(3,$partidas->getCiudad());
        $stmt->bindValue(4,$partidas->getLugar());
        $stmt->bindValue(5,$partidas->getCubierto());
        $stmt->bindValue(6,$partidas->getEstado());
        
        //echo $stmt->debugDumpParams();
        $stmt->execute();

        ConexionBD::cerrar();
    }

    public static function modificar($estado,$id) {
        $conexion = ConexionBD::conectar();

        $stmt = $conexion->prepare("UPDATE partidas SET estado = ? WHERE id = ?");
        // Bind
        $stmt->bindValue(1, $estado);
        
        $stmt->bindValue(2, $id);
        // Ejecuta la consulta
        $stmt->execute();

        ConexionBD::cerrar();
    }   

    function selectFecha($id, $busqueda) {
        $conexion = ConexionBD::conectar();
        $partidas = null;
        try {
            $stmt = $conexion->prepare("SELECT * FROM partidas WHERE id = ? 
                 AND fecha >= ? AND ciudad LIKE ?");
            $stmt->bindValue(1, $id);
            $stmt->bindValue(2, date('Y-m-d'));
            $stmt->bindValue(3, "%".$busqueda."%");
            $stmt->execute();
            $partidas = $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }   
        $conexion = null; //Cerrar la conexión

        return $partidas;
    }

}

