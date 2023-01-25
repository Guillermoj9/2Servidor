<?php
    class ComentarioBD {

        public static function apuntarComentario($idJuego,$comentario,$idNoticia,$nick) {
            $conexion = ConexionBD::conectar();
            
            $coleccion = $conexion->comentarios;

            $insertOneResult = $coleccion->insertOne(
                
                ['idJuego' => intVal($idJuego),
                'idNoticia' => intVal($idNoticia),
                'comentario' => ($comentario),
                'nick' => ($nick),
                //'$set' => ['comentario' => $comentario ],
                'upsert' => true]  //Inserta si no encuentra. Modifica si lo encuentra
            );

            ConexionBD::cerrar();

        }

        public static function getComentario($idNoticia) {
            $conexion = ConexionBD::conectar();
            
            $coleccion = $conexion->comentarios;

            $comentario = $coleccion->findOne(['idNoticia' => intVal($idNoticia)]);

            if ($comentario == null)
                return "-";
            else
                return $comentario['comentario'];
        }
    }

?>