<?php

class RegalosBD {

//SACAMOS TODOS LOS DATOS DE TODOS LOS REGALOS
//FUNCIONA
    public static function getRegalos($id) {

        $conexion = ConexionBD::conectar();
            
        $coleccion = $conexion->regalos;

        $cursor = $coleccion->find(['id_usuario'=> $id]);

        //Crear los objetos para devolverlos (MVC), Mongo me devuelve array asociativo
        $regalos = array();
        foreach($cursor as $regalo) {
           $regalo_OBJ = new Regalos($regalo['id'],$regalo['nombre'],$regalo['destinatario'],$regalo['precio'],$regalo['estado'],$regalo['year'],$regalo['id_usuario']);
           array_push($regalos, $regalo_OBJ);
        }

        ConexionBD::cerrar();

        return $regalos;
    }

    

//FUNCIONA
    public static function deleteRegalo($id){
        $conexion = ConexionBD::conectar();

        $deleteResult = $conexion->regalos->deleteOne(['id' => intVal($id)]); 

        ConexionBD::cerrar();
    }


    public static function crearRegalo($regalo) {
        $conexion = ConexionBD::conectar();

        //Hacer el autoincrement
        //Ordeno por id, y me quedo con el mayor
        $regaloMayor = $conexion->regalos->findOne(
            [],
            [
                'sort' => ['id' => -1],
            ]);
        if (isset($regaloMayor)){
            $idValue = $regaloMayor['id'];
        }else{
            $idValue = 0;
        }

        //Collección 'usuarios'
        $insertOneResult = $conexion->regalos->insertOne([
            'id' => intVal($idValue + 1),
            'nombre' => $regalo->getNombre(),
            'destinatario' => $regalo->getDestinatario(),
            'precio' => intVal($regalo->getPrecio()),
            'estado' => $regalo->getEstado(),
            'year' => intVal($regalo->getYear()),
            'id_usuario' => $regalo->getId_usuario()
        ]);

        ConexionBD::cerrar();
    }


    
    public static function modificar($nombre, $destinatario, $precio, $estado, $year,$id)
    {
        $conexion = ConexionBD::conectar();

        //Consulta BBDD
        
        $updateResult = $conexion->regalos->updateOne(
            ["id"=>intVal($id)],
            ['$set'=>["nombre"=>$nombre,
                      "destinatario"=>$destinatario,
                      "precio"=>intval($precio),
                      "estado"=>$estado,
                      "year"=>intval($year)]]);

        //Usamos FETCH_CLASS para que convierta a objetos las filas de la BD

        ConexionBD::cerrar();
    }

    /*public static function crearRegalo($regalos){
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
*/
    /*public static function modificar($nombre, $destinatario, $precio, $estado, $year,$id){
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
    */
}

    ?>