<?php

class Hotel {
    private string $_name;
    private string $_adress;
    private string $_city;
    private int $_nbrChambre;
    private array $_chambre;
    private array $_reservation;


    public function __construct( string $name, string $adress, string $city, $nbrChambre) {
        $this->_name = $name;
        $this->_adress = $adress;
        $this->_city = $city;
        $this->_nbrChambre = $nbrChambre;
        $this->_chambre= [];
        $this->_reservation = [];
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

// SETTER

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

// TO STRING

    public function AfficherHotel() {
        return "<h2>".$this->_name."</h2><p>".$this->_adress." ".$this->_city."</p><p>Nombre de chambres : ".$this->_nbrChambre."</p><br><br>";
    }
    public function __toString() {
            return $this->_name;
        }
    //relier les différentes classes
    public function AjouterChambre($NewChambre) {
        $this->_chambre[] = $NewChambre;
    }
    public function AddReservation($NewReservation) {
        $this->_reservation[] = $NewReservation;
    }
    //affichage reservations d'un hotel
    public function afficherReservationHotel() {
        $result = "<h2>".$this->_name."</h2>";
        foreach ($this->_reservation as $reservation) {
            $result .= $reservation->getClient()." - Chambre ".$reservation->getChambre();
        }
        return $result .= " - du ".$this->getDateDebut()->format("d-m-Y")." au ".$this->getDateFin()->format("d-m-Y");
    }
    
    public function AfficherListeChambre() {
        foreach($this->_chambre as $chambre) {
            echo $chambre->getListeChambre()."<br>";
        }
    }
}
