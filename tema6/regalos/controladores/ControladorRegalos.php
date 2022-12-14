<?php

    class ControladorRegalos {


        public static function mostrarRegalos() {
            //LLamar al modelo para obtener todas las películas en un array de Pelicula
            $regalos = RegalosBD::getRegalos();

            //Llamar a una vista para pintar esas películas
            VistasRegalos::render($regalos);
        }

    }
    ?>