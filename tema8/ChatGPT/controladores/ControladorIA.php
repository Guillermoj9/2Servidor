<?php
    class ControladorIA {

        public static function mostrarIA($texto) {            
           
            VistaIA::mostrarIA($texto);

        }
        public static function mostrarArticulo() { 
            VistaArticulo::mostrarArticulo();
        }

        public static function guardarArticulo($titulo, $texto, $imagen, $fecha) {
               //Llamar al modelo para insertar esto
               articuloBD::guardarArticulo($titulo, $texto, $imagen, $fecha);
               VistaArticulo::mostrarArticulo();
        }
    }