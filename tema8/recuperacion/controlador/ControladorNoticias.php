<?php
    class ControladorNoticias {

        public static function verJuego() {
            VistaJuegos::verJuego();
        }

        public static function verJuegoDetalle($id) {
            VistaNoticias::verJuegoDetalle($id);
        }

        public static function mostrarNoticias($id,$comentario) {            
            
            VistaNoticias::mostrarNoticias($id,$comentario);

        }

        public static function mostrarComentario($idNoticia,$idJuego,$comentario,$nick) {
            //Llamar al modelo para insertar esto
            ComentarioBD::apuntarComentario($idNoticia, $comentario,$idJuego,$nick);
            //$comentario = ComentarioBD::getComentario($idNoticia);
            VistaNoticias::mostrarNoticiaComentario($idNoticia,$comentario,$idJuego);
            
        }

    }
