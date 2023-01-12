<?php

class EnlacesBD {

//SACAMOS TODOS LOS DATOS DE TODOS LOS REGALOS
    public static function getEnlaces($id) {

        $conexion = ConexionBD::conectar("regalos"); //Base de datos 'ejemplo'

        $cursor = $conexion->enlaces->find();



        //Crear los objetos para devolverlos (MVC), Mongo me devuelve array asociativo
        $enlaces = array();
        foreach($cursor as $enlace) {
           $enlace_OBJ = new Enlaces($enlace['id'],$enlace['nombre'],$enlace['enlace'],$enlace['precio'],$enlace['imagen'],$enlace['prioridad'],$enlace['id_regalo']);
           array_push($enlaces, $enlace_OBJ);
        }

        ConexionBD::cerrar();

        return $enlaces;
    }
    public static function deleteEnlace($id){
        $conexion = ConexionBD::conectar();

        $deleteResult = $conexion->enlaces->deleteOne(['id' => intVal($id)]); 

        ConexionBD::cerrar();
    }

    public static function nuevoEnlace($enlace) {
        $conexion = ConexionBD::conectar();

        //Hacer el autoincrement
        //Ordeno por id, y me quedo con el mayor
        $enlaceMayor = $conexion->enlaces->findOne(
            [],
            [
                'sort' => ['id' => -1],
            ]);
        if (isset($enlaceMayor))
            $idValue = $enlaceMayor['id'];
        else
            $idValue = 0;


        //Collección 'usuarios'
        $insertOneResult = $conexion->enlaces->insertOne([
            'id' => intVal($idValue + 1),
            'nombre' => $enlace->getNombre(),
            'enlace' => $enlace->getEnlace(),
            'precio' => $enlace->getPrecio(),
            'imagen' => $enlace->getImagen(),
            'prioridad' => $enlace->getPrioridad()
        ]);

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

   /* public static function nuevoEnlace($nombre,$enlace,$precio,$imagen,$prioridad,$id_regalo) {
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
    }*/
}