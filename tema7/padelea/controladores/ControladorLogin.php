<?php
    class ControladorLogin {

       /* public static function mostrarPartidas($id) {
            //LLamar al modelo para obtener todas las partidas en un array de partida
            $partidas = PartidaBD::getPartida();
            $jugadores = JugadoresBD::getJugadores($id);
            //Llamar a una vista para pintar esas partidas
            VistaTodasPartidas::render($partidas,$jugadores);
        }*/

        public static function mostrarFormularioLogin() {
            VistaLogin::mostrarFormularioLogin("");
        }

        public static function mostrarFormularioLoginError() {
            VistaLogin::mostrarFormularioLogin("Error de login, prueba otra vez");
        }


        public static function chequearLogin($email, $password) {
            $usuario = null;
            $valido = JugadoresBD::chequearLogin($email, $password, $usuario);

            //Error login
            if ($valido == 0) {
                echo "<script>window.location='enrutador.php?accion=error';</script>";
            }

            //Login correcto
            if ($valido == 1) {
                $_SESSION['usuario'] = serialize($usuario);
                echo "<script>window.location='enrutador.php?accion=mostrarP';</script>";
            }


        }


    }

?>