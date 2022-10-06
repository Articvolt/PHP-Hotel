<?php

class Hotel {
    private string $_name;
    private string $_adress;
    private string $_city;


    public function __construct( string $name, string $adress, string $city) {
        $this->_name = $name;
        $this->_adress = $adress;
        $this->_city = $city;
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

// TO STRING

public function __toString() {
    return $this->_name." situé à ".$this->_adress." ".$this->_city;
}


}
