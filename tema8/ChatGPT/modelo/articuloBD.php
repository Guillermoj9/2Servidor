<?php
class articuloBD
{

    public static function guardarArticulo($titulo, $texto, $imagen, $fecha)
    {
        $conexion = ConexionBD::conectar();

        $coleccion = $conexion->articulos;

        $insertOneResult = $coleccion->insertOne(

            [
                "titulo" => $titulo,
                "texto" => $texto,
                "imagen" => $imagen,
                "fecha" => $fecha
            ]  
        );

        ConexionBD::cerrar();
    }
    public static function getArticulos()
    {
        $conexion = ConexionBD::conectar();
            
        $coleccion = $conexion->articulos;

        $cursor = $coleccion->find();

        //Crear los objetos para devolverlos (MVC), Mongo me devuelve array asociativo
        $articulos = array();
        foreach($cursor as $articulo) {
           $articulo_OBJ = new Articulo($articulo['titulo'],$articulo['texto'],$articulo['imagen'],$articulo['fecha']);
           array_push($articulos, $articulo_OBJ);
        }

        ConexionBD::cerrar();

        return $articulos;
    }
}
