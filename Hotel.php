<?php

class Hotel {
    private string $_name;
    private string $_adress;
    private string $_city;
    private int $_nbrChambre;


    public function __construct( string $name, string $adress, string $city, $nbrChambre) {
        $this->_name = $name;
        $this->_adress = $adress;
        $this->_city = $city;
        $this->_nbrChambre = $nbrChambre;
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

public function __toString() {
    return "<h2>".$this->_name."</h2>".$this->_adress." ".$this->_city."<br>Nombre de chambres : ".$this->_nbrChambre."<br><br>";
}


}
