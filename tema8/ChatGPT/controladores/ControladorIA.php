<?php
    class ControladorIA {

        public static function mostrarIA($texto) {            
           
            VistaIA::mostrarIA($texto);

        }
        public static function mostrarArticulo() { 
            VistaArticulo::mostrarArticulo();
        }

    }