<?php

class Hotel {
    private string $_name;
    private string $_adress;
    private string $_city;
    private int $_nbrChambre;
    private array $_chambre;
    private array $_reservations;


    public function __construct( string $name, string $adress, string $city, $nbrChambre) {
        $this->_name = $name;
        $this->_adress = $adress;
        $this->_city = $city;
        $this->_nbrChambre = $nbrChambre;
        $this->_chambre= [];
        $this->_reservations = [];
    }

    //GETTER
    public function getName() {
        return $this->_name;
    }
    public function getAdress() {
        return $this->_adress;
    }
    public function getCity() {
        return $this->_city;
    } 
    public function getNbrChambre() {
        return $this->_nbrChambre;
    }
    public function getAdresse() {
        return $this->_adress . $this->_city;
    }


    public function getReservation() {
        return $this->reservations;
    }
    public static function getChambre() {
        return self::$_chambre;
    }

    //SETTER
    public function setName(string $NewName) {
        $this->_name = $NewName;
    }
    public function setAdress(string $NewAdress) {
        $this->_adress = $NewAdress;
    }
    public function setCity(string $NewCity) {
        $this->_city = $NewCity;
    }
    public function setNbrChambre(int $NewNbrChambre) {
        $this->_nbrChambre = $NewNbrChambre;
    }

    //TO STRING
    public function __toString(){
        return $this->_name;
    }
    
    // Ajouter chambre à l'hotel
    public function AjouterChambres($NewChambre) {
        $this->_chambre[] =$NewChambre;
    } 

    public function AfficherReservationsHotel() {
        $result = "<h2> Reservations de l'hôtel ". $this->_name."</h2>";
        foreach ($this->_reservations as $reservations) {
            $result .= $reservations->getClient()." ".$reservations->getChambre();
        }
        return $result;
    } 

}
