<?php

class RegalosBD {

//SACAMOS TODOS LOS DATOS DE TODOS LOS REGALOS
    public static function getRegalos() {

        $conexion = ConexionBD::conectar();

        //Consulta BBDD
        $stmt = $conexion->prepare("SELECT * FROM regalos");

        $stmt->execute();

        //Usamos FETCH_CLASS para que convierta a objetos las filas de la BD
        $regalos = $stmt->fetchAll(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'Regalos');

        ConexionBD::cerrar();
        var_dump($regalos);
        return $regalos;
    }





}
    ?>