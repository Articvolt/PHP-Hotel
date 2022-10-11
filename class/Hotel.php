<?php

class Hotel {
    private string $name;
    private string $adress;
    private string $city;
    private int $nbrChambre;

    // tableau
    private array $chambres;
    private array $reservations;


    public function __construct( string $name, string $adress, string $city, $nbrChambre) {
        $this->name = $name;
        $this->adress = $adress;
        $this->city = $city;
        $this->nbrChambre = $nbrChambre;

        //tableau
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
        return $this->adress." ".$this->city;
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

    // AFFICHAGE DESCRIPTION HOTEL
    public function AfficherDescriptionHotel() {
        echo "<h2>".$this->name."</h2>".$this->getAdresse();
    }
    
    // LISTE DES CHAMBRES
    public function AjouterChambres($chambre) {
        $this->chambres[] =$chambre;
    } 
    // AFFICHAGE LISTE DES CHAMBRES D UN HOTEL
    public function AfficherListeChambre() {
        echo "<h2>".$this->name."</h2>";
        foreach ($this->chambres as $chambre) {
            echo $chambre."<br>";
        }
    }


    // LISTE DES RESERVATIONS
    public function AjouterReservation($reservation){
        $this->reservations[]= $reservation;
    }

    // AFFICHAGE LISTE DES RESERVATIONS D UN HOTEL
    public function AfficherReservationsHotel() {
        $result = "<h2> Reservations de l'hôtel ". $this->name."</h2>";
        foreach ($this->reservations as $reservation) {
            $result .= $reservation->getClient()." - ".$reservation->getChambre()." - ".$reservation->getDates()."<br>";
        }  
        return $result; 
    } 

}
