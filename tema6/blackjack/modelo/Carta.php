<?php

    class Carta {

        protected $palo;
        protected $numero;

        public function __construct($palo, $numero) {
            $this->palo = $palo;
            $this->numero = $numero;
        }

        public function __toString() {
            return "".$this->numero."-".$this->palo.".png";
        }

        /**
         * Get the value of palo
         */ 
        public function getPalo()
        {
                return $this->palo;
        }

        /**
         * Set the value of palo
         *
         * @return  self
         */ 
        public function setPalo($palo)
        {
                $this->palo = $palo;

                return $this;
        }

        /**
         * Get the value of numero
         */ 
        public function getNumero()
        {
                return $this->numero;
        }

        /**
         * Set the value of numero
         *
         * @return  self
         */ 
        public function setNumero($numero)
        {
                $this->numero = $numero;

                return $this;
        }


        public function getValor() {

            if ($this->numero <= 9) {
                return $this->numero;
            } else if ($this->numero = 1) {
                return 11; //Controlar si me paso que valga 1
            } else if ($this->numero > 9) {
                return 10;
            }
        }
    }