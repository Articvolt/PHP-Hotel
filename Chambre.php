<?php

    class Chambre {


        private Hotel $_hotel;
        private int $_num;
        private int $_nbrBed;
        private bool $_wifi;
        private float $_price;
        private array $_reservations;

        public function __construct(Hotel $hotel, string $num, int $nbrBed, bool $wifi, int $price) {
            $this->_name = $hotel;
            $this->_num= $num;
            $this->_nbrBed = $nbrBed;
            $this->_price = $price;
            $this->_wifi = $wifi;
            $this->_reservations = [];
        }

        //GETTER
        public function getHotel() {
            return $this->_hotel;
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

        //SETTER=
        public function setHotel(string $NewHotel) {
            $this->_name = $NewHotel;
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
        
        //TO STRING
        public function __toString() {
            return $this->_num." (".$this->_nbrBed." lits - ".$this->_price." € - ".$this->getWifi().")";
        } 
    }
    // raccourcis clavier 0128 + Alt : €