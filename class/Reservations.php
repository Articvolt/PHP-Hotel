<?php
// Collection -> mettre toujours au pluriel

    class Reservations {


        private Client $_client;
        private Chambre $_chambre;
        private DateTime $_dateDebut;
        private DateTime $_dateFin;
        
        public function __construct(Client $client, Chambre $chambre, string $dateDebut, string $dateFin ) {
            
            
            $this->_client = $client;
            $this->_chambre = $chambre;
            $this->_dateDebut = new DateTime($dateDebut);
            $this->_dateFin = new DateTime($dateFin);
            
        }

        //GETTER
        public function getClient() {
            return $this->_client;
        }
        public function getChambre() {
            return $this->_chambre;
        }
        public function getDateDebut() {
            return $this->dateDebut;
        }
        public function getDateFin() {
            return $this->dateFin;
        }


        //SETTER
        public function setClient(string $NewClient) {
            $this->_client = $NewClient;
        }
        public function setChambre(string $NewChambre) {
            $this->_chambre = $NewChambre;
        }
        public function setDateDebut(DateTime $NewDateDebut)  {
            $this->_dateDebut = $NewDateDebut; 
        }
        public function setDateFin(DateTime $NewDateFin)  {
            $this->_dateFin = $NewDateFin;
        }
        // FONCTION CUSTOM
        public function AfficherReservationClient() {
            $result = "<h2> Réservation de ".$this->client->getUsername()." ".$this->client->getName()."</h2> ";
            foreach ($this->_reservations as $reservations) {
                return " Hotel :".$this->hotel-> $result .= $reservations->getChambre(); 
            }
            return $result;
        }

        //TO STRING
        public function __toString(){
            return "<strong>Hotel : ". $this->_chambre->getHotel()."</strong> / Chambre : ".$this->_chambre. " du ".$this->_dateDebut->format("d-m-Y")." au ".$this->_dateFin->format("d-m-Y");  
        }
    }