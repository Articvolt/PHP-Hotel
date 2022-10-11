<?php

class Hotel {
    private string $name;
    private string $adress;
    private string $city;
    private int $nbrChambre;
    private array $chambres;
    private array $reservations;


    public function __construct( string $name, string $adress, string $city, $nbrChambre) {
        $this->name = $name;
        $this->adress = $adress;
        $this->city = $city;
        $this->nbrChambre = $nbrChambre;
        $this->chambres= [];
        $this->reservations = [];
    }

    //GETTER
    public function getName() {
        return $this->name;
    }
    public function getAdress() {
        return $this->adress;
    }
    public function getCity() {
        return $this->city;
    } 
    public function getNbrChambre() {
        return $this->nbrChambre;
    }
    public function getAdresse() {
        return $this->adress . $this->city;
    }


    public function getReservation() {
        return $this->reservations;
    }
    public static function getChambres() {
        return self::$chambres;
    }

    //SETTER
    public function setName(string $NewName) {
        $this->name = $NewName;
    }
    public function setAdress(string $NewAdress) {
        $this->adress = $NewAdress;
    }
    public function setCity(string $NewCity) {
        $this->city = $NewCity;
    }
    public function setNbrChambre(int $NewNbrChambre) {
        $this->nbrChambre = $NewNbrChambre;
    }

    //TO STRING
    public function __toString(){
        return $this->name;
    }
    
    // Ajouter chambre à l'hotel
    public function AjouterChambres($chambre) {
        $this->chambres[] =$chambre;
    } 
    public function AjouterReservation($reservation){
        $this->reservations[]= $reservation;
    }

    public function AfficherReservationsHotel() {
        echo "<h2> Reservations de l'hôtel ". $this->name."</h2>";
        foreach ($this->reservations as $reservation) {
            return $reservation->getClient()." chambre ".$reservation->getChambre();
        }
        
    } 

}
