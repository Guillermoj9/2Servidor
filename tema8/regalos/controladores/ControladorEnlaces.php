<?php

    class ControladorEnlaces {


        public static function mostrarEnlaces($id) {
            //LLamar al modelo para obtener todas las películas en un array de regalos
            $enlaces = EnlacesBD::getEnlaces($id);

            //Llamar a una vista para pintar esos regalos
           
            VistasEnlaces::render($enlaces);
        }

        public static function borrarEnlaces($id,$id_regalo){
        
            EnlacesBD::deleteEnlace($id);
            echo "<script>window.location='enrutador.php?accion=verEnlaces&id=$id_regalo'</script>";

        }
       
        public static function crearEnlace($nombre,$enlace,$precio,$imagen,$prioridad,$id_regalo) {
            $enlaces = new enlaces ($nombre,$enlace,$precio,$imagen,$prioridad,$id_regalo);
            EnlacesBD::nuevoEnlace($nombre,$enlace,$precio,$imagen,$prioridad,$id_regalo);
            echo "<script>window.location='enrutador.php?accion=verEnlaces&id=$id_regalo'</script>";

        }
        
    }
    ?>