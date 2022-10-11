<?php

    class Chambre {


        private $hotel;
        private int $num;
        private int $nbrBed;
        private bool $wifi;
        private float $price;
        private array $reservations;

        public function __construct(hotel $hotel, string $num, int $nbrBed, bool $wifi, int $price) {
            $this->name = $hotel;
            $this->num= $num;
            $this->nbrBed = $nbrBed;
            $this->price = $price;
            $this->wifi = $wifi;
            $this->reservations = [];

            // ajoute l'hotel à la chambre
            $hotel->AjouterChambres($this);
        }

        //GETTER
        public function getHotel() {
            return $this->hotel;
        }

        public function getNum() {
            return $this->num;
        }
        public function getNbrBed() {
            return $this->nbrBed;
        }     
        public function getWifi() {
            if ($this->wifi == TRUE){
                return "Wifi : Oui";
            } elseif($this->wifi == FALSE){
                return "Wifi : Non";
            }
        }
        public function getPrice() {
            return $this->price;
        }


        //SETTER=
        public function setHotel(string $NewHotel) {
            $this->name = $NewHotel;
        }
        public function setNum(int $NewNum) {
            $this->num = $NewNum;
        }
        public function setNbrBed(int $NewNbrBed) {
            $this->nbrBed = $NewNbrBed;
        }
        public function setWifi(bool $NewWifi) {
            $this->wifi = $NewWifi;
        }
        public function setPrice(string $NewPrice) {
            $this->price = $NewPrice;
        }
    
        public function AjouterReservation($reservation){
            $this->reservations[]= $reservation;
        }
    
        //TO STRING
        public function __toString() {
            return " chambre ".$this->num;
        } 
    }
    // raccourcis clavier 0128 + Alt : €

    // ." (".$this->nbrBed." lits - ".$this->price." € - ".$this->getWifi().")<br>"