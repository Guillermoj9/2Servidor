<?php

    class UsuarioBD {
        public static function getUsuario() {

            $conexion = ConexionBD::conectar();
    
            //Consulta BBDD
            $stmt = $conexion->prepare("SELECT * FROM usuarios");
    
            $stmt->execute();
    
            //Usamos FETCH_CLASS para que convierta a objetos las filas de la BD
            $usuarios = $stmt->fetchAll(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'Usuario');
    
            ConexionBD::cerrar();
    
            return $usuarios;
        }
    }