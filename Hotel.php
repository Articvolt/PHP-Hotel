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
    public function getAdresse() {
        return $this->_adress . $this->_city;
    }


    // public function getReservation() : array {
    //     return $this->reservations;
    // }
    // public static function getChambre() : array {
    //     return self::$_chambre;
    // }

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

    //FONCTIONS
    public function ajouterChambre(Chambre $c) {
        $this->chambres[] = $c;
    }

    public function ajouterReservation(Reservation $r) {
        $this->reservations[] = $r;
    }
}
//     public function afficherReservations() : string {
//         $result = "<h4>Réservations de l'hôtel $this</h4>";
//         if(count($this->_reservation) == 0){
//             $result .=  "Aucune réservation !<br/>";
//         } else {
//             echo count($this->_reservation)." réservations<br/>";
//             foreach($this->_reservation as $resa) {
//                 $result .= $resa->getClient()." 
//                                 - Chambre ".$resa->getChambre()->getNumero()." - 
//                                 du ".$resa->getDateDebut()->format("d-m-Y")." 
//                                 au ".$resa->getDateFin()->format("d-m-Y")."<br/>";
//             }
//         }
//         return $result;
//     }

//     public function getInfos() : string {
//         $nbChambres = count($this->getChambre());
//         $nbResa = count($this->getReservation());
//         $nbLibres = $nbChambres - $nbResa; 
//         return "<h3 class='uk-margin-remove-bottom'>$this</h3>".$this->getAdresse()."<br/>
//                     Nombre de chambres : ".$nbChambres."<br/>
//                     Nombre de chambres réservées : ".$nbResa."<br/>
//                     Nombre de chambres dispo : ".$nbLibres;
//     }
// }
