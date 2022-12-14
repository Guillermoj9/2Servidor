<?php

    class Jugador {

        protected $mano;

        public function __construct() {
            $this->mano = array();
        }

        public function nuevaCarta($carta) {
            array_push($this->mano, $carta);
        }

        public function __toString() {
            $cadena= "";
            foreach ($this->mano as $carta) {
                $cadena.= $carta.", ";
            }

            return $cadena;
        }

        public function valorMano() {

            $total = 0;
            foreach ($this->mano as $carta) {
                $total += $carta->getValor();
            }

            //Comprobar ases
            foreach ($this->mano as $carta) {
                if ($carta->getNumero() == 1) { //Es un as
                    if ($total > 21) {
                        $total = $total - 10;
                    }
                }
            }



        }

    }


?>