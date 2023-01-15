<?php

    class ControladorRegalos {


        public static function mostrarRegalos($id) {
            //LLamar al modelo para obtener todas las películas en un array de regalos
            $regalos = RegalosBD::getRegalos($id);

            //Llamar a una vista para pintar esos regalos
            VistasRegalos::render($regalos);
        }

        public static function borrarRegalo($id){
        
            RegalosBD::deleteRegalo($id);
            echo "<script>window.location='enrutador.php?accion=mostrarR'</script>";
        }

        public static function crearRegalo($nombre, $destinatario, $precio, $estado, $year,$id_usuario) {
            $regalos = new Regalos(0, $nombre, $destinatario, $precio, $estado, $year,$id_usuario);
            RegalosBD::crearRegalo($regalos);
            echo "<script>window.location='enrutador.php?accion=mostrarR'</script>";

        }
        public static function modificar($nombre, $destinatario, $precio, $estado, $year,$id) {
            
            RegalosBD::modificar($nombre, $destinatario, $precio, $estado, $year,$id);
            echo "<script>window.location='enrutador.php?accion=mostrarR'</script>";

        }
    }
    ?>