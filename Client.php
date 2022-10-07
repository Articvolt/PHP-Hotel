<?php

class Client {
    protected string $_username;
    protected string $_name;
    protected DateTime $_dateDebut;
    protected DateTime $_dateFin;
    private array $_reservation;

    public function __construct(string $username, string $name, string $dateDebut, string $dateFin) {
        $this->_username = $username;
        $this->_name = $name;
        $this->_dateDebut = new DateTime($dateDebut);
        $this->_dateFin = new DateTime($dateFin);
        $this->_reservation = [];
    }

//GETTER

    public function getUsername() {
        return $this->_username;
    }

    public function getName() {
        return $this->_name;
    }

    public function getDateDebut() {
        return $this->_dateDebut;
    }

    public function getDateFin() {
        return $this->_dateFin;
    }

//SETTER

    public function setUsername(string $NewUsername) {
        $this->_username = $NewUsername;
    }

    public function setName(string $NewName) {
        $this->_name = $NewName;
    }

    public function setDateDebut(DateTime $NewDateDebut) {
        $this->_dateDebut = $NewDateDebut;
    }

    public function setDateFin(DateTime $NewDateFin) {
        $this->_dateFin = $NewDateFin;
    }

//TO STRING

    public function __toString() {
        return $this->_username." ".$this->_name;
    }
    //relie a la classe reservation
    public function AddReservation($NewReservation) {
        $this->_reservation[] = $NewReservation;
    }
    //affichage de la reservation du client
    public function afficherReservations() {
        $result = "<h3>Réservations de $this</h3>";
        $result .= count($this->reservations)." réservations.<br/>";
        foreach($this->reservations as $resa) {
            $result .= "$resa<br/>";
        }
        return $result;
        }
        
    //affichage du nombre total de réservations
    public function getTotalReservations() {
        $total = 0;
        foreach($this->reservations as $resa) {
            $total += $resa->getNbJours() * $resa->getChambre()->getPrix();
        }
        return "Total : $total €<br/>";
   
    }

}
