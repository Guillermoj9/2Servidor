<?php

use MongoDB\Client;
require '../vendor/autoload.php';

class ConexionBD {

    private static $conexion;

    //Poned IP de vuestro MongoDB
    public static function conectar($bd="apiGPT") {
        try {
            //CONEXIÓN A MONGODB CLOUD ATLAS. Comentar esta línea para conectar en local.
            //$host = "mongodb+srv://admin:evhT1Hu8ZasF8llx@cluster0.qmwhh.mongodb.net/".$database."?retryWrites=true&w=majority";
           $host =  "mongodb+srv://guille:1234@cluster0.zhq5qyh.mongodb.net/apiGPT";
            //$host = "mongodb://root:toor@mongo:27017/"; //MongoDB en Docker
            self::$conexion = (new Client($host))->{$bd};
        } catch (Exception $e){
            echo $e->getMessage();
        }

        return self::$conexion;
    }

    public static function cerrar() {
        self::$conexion = null;
    }

}
