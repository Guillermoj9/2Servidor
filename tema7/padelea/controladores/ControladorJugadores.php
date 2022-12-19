<?php


class ControladorJugadores {



    public static function mostrarPartidas($id) {
            //LLamar al modelo para obtener todas las partidas en un array de partida
            $partidas = PartidaBD::getPartida();
            $jugadores =JugadoresBD::getJugadores($id);
            //Llamar a una vista para pintar esas partidas
            VistaJugadores::render($jugadores,$partidas);
        }


    }
?>