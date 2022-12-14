<?php

    class Partida {

        protected $baraja;
        protected $crupier;
        protected $jugador;


        public function __construct() {
            $this->jugador = new Jugador();
            $this->crupier = new Jugador();
            $this->baraja = new BarajaInglesa();
        }


        /**
         * Get the value of baraja
         */ 
        public function getBaraja()
        {
                return $this->baraja;
        }

        /**
         * Set the value of baraja
         *
         * @return  self
         */ 
        public function setBaraja($baraja)
        {
                $this->baraja = $baraja;

                return $this;
        }

        /**
         * Get the value of crupier
         */ 
        public function getCrupier()
        {
                return $this->crupier;
        }

        /**
         * Set the value of crupier
         *
         * @return  self
         */ 
        public function setCrupier($crupier)
        {
                $this->crupier = $crupier;

                return $this;
        }

        /**
         * Get the value of jugador
         */ 
        public function getJugador()
        {
                return $this->jugador;
        }

        /**
         * Set the value of jugador
         *
         * @return  self
         */ 
        public function setJugador($jugador)
        {
                $this->jugador = $jugador;

                return $this;
        }


        public function __toString() {
            $cadena = "";
            $cadena .= "Crupier: ".$this->crupier."<br>";
            $cadena .= "Jugador: ".$this->jugador."<br>";
            return $cadena;
        }
    }

    ?>