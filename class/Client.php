<?php

class Client {
    protected string $username;
    protected string $name;
    private array $reservations;

    public function __construct(string $username, string $name) {
        $this->username = $username;
        $this->name = $name;
        $this->reservations = [];
    }

    //GETTER
    public function getUsername() {
        return $this->username;
    }
    public function getName() {
        return $this->name;
    }

    //SETTER
    public function setUsername(string $NewUsername) {
        $this->username = $NewUsername;
    }

    public function setName(string $NewName) {
        $this->name = $NewName;
    }

    //TO STRING
    public function __toString() {
        return "$this->username $this->name";
    }

    //FONCTIONS

    public function AjouterReservation($reservation){
        $this->reservations[]= $reservation;
    }

    public function AfficherReservationClient() {
        $result = "<h2> Réservation de ".$this->getUsername()." ".$this->getName()."</h2> ";
        foreach ($this->reservations as $reservations) {
            $result .= $reservations->getChambre().$reservations->getDates()->format("d-m-Y"); 
        }
        return $result;
    }
}
