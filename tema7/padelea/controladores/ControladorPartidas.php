<?php

    class ControladorPartidas {


        public static function mostrarPartidas($id) {
            //LLamar al modelo para obtener todas las partidas en un array de partida
            $partidas = PartidaBD::getPartida($id);

            //Llamar a una vista para pintar esas partidas
            VistaPartidas::render($partidas);
        }
        public static function borrarPartida($id){
        
            PartidaBD::deletePartida($id);
            echo "<script>window.location='enrutador.php?accion=mostrarP'</script>";
        }
        public static function insertarPartida($fecha, $hora, $ciudad, $lugar, $cubierto,$estado) {
            $partida = new Partida($fecha, $hora, $ciudad, $lugar, $cubierto,$estado);
            PartidaBD::crearPartida($partida);
            echo "<script>window.location='enrutador.php?accion=mostrarP'</script>";

        }
        public static function modificar($estado,$id){
        
            PartidaBD::modificar($estado,$id);
            echo "<script>window.location='enrutador.php?accion=mostrarP'</script>";
        }
        
    }
