<?php

    class Chambre {
        private int $_num;
        private int $_nbrBed;
        private bool $_wifi;
        private int $_price;

        public function __construct(int $num, int $nbrBed, bool $wifi, int $price) {
            $this->_num= $num;
            $this->_nbrBed = $nbrBed;
            $this->_price = $price;
            $this->_wifi = $wifi;
        }

        //GETTER

        public function getNum() {
            return $this->_num;
        }
        public function getNbrBed() {
            return $this->_nbrBed;
        }     
        public function getWifi() {
            if ($this->_wifi == TRUE){
                return "Wifi : Oui";
            } elseif($this->_wifi == FALSE){
                return "Wifi : Non";
            }
        }
        public function getPrice() {
            return $this->_price;
        }
        // SETTER

        public function setNum(int $NewNum) {
            $this->_num = $NewNum;
        }
        public function setNbrBed(int $NewNbrBed) {
            $this->_nbrBed = $NewNbrBed;
        }
        public function setPrice(int $NewPrice) {
            $this->_price = $NewPrice;
        }
        public function setWifi(bool $NewWifi) {
            $this->_wifi = $NewWifi;
        }

        // TO STRING

        public function __toString() {
            return "La chambre ".$this->_num." possède ".$this->_nbrBed." lits (".$this->getWifi().")<br>Coût de la nuit ".$this->_price." euros";
        }
    }
        