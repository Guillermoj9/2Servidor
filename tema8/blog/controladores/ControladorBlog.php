<?php
    class ControladorBlog {

        public static function mostrarBlog() {            
           
            $articulos = articuloBD::getArticulos();

            VistaBlog::mostrarBlog($articulos);

        }
    
    }