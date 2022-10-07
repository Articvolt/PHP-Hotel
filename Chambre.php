<?php

    class Chambre {
        private Hotel $_name;
        private int $_num;
        private int $_nbrBed;
        private bool $_wifi;
        private int $_price;

        public function __construct(Hotel $name, int $num, int $nbrBed, bool $wifi, int $price) {
            $this->_name = $name;
            $this->_num= $num;
            $this->_nbrBed = $nbrBed;
            $this->_price = $price;
            $this->_wifi = $wifi;
        }

        //GETTER

        public function getName() {
            return $this->_name;
        }

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
        // SETTER=

        public function setName(string $NewName) {
            $this->_name = $NewName;
        }

        public function setNum(int $NewNum) {
            $this->_num = $NewNum;
        }
        public function setNbrBed(int $NewNbrBed) {
            $this->_nbrBed = $NewNbrBed;
        }
        public function setWifi(bool $NewWifi) {
            $this->_wifi = $NewWifi;
        }
        public function setPrice(string $NewPrice) {
            $this->_price = $NewPrice;
        }
        
        // TO STRING

        public function __toString() {
            return "La chambre ".$this->_num." (".$this->_name.") possède ".$this->_nbrBed." lits (".$this->getWifi()."). Prix : ".$this->_price." €<br><br>";
        }
    }
    
    // raccourcis clavier 0128 + Alt : €