<?php

    class controladorLibro {


        public static function mostrarLibros() {
            //LLamar al modelo para obtener todas las películas en un array de Pelicula
            $libros = LibroBD::getLibros();

            //Llamar a una vista para pintar esas películas
            VistaLibrosTodos::render($libros);
        }

        /*public static function mostrarPelicula($id) {
            //LLamar al modelo para obtener el objeto de la pelicula con id $id
            $pelicula = PeliculaBD::getPelicula($id);
            $criticas = CriticaBD::getCriticas($id);

            //Llamar a la vista para pintar la película en detalle
            VistaPeliculaDetalle::render($pelicula, $criticas);
        }
*/

    }



?>