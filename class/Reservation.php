<?php
// Collection -> mettre toujours au pluriel

    class Reservation {


        private Client $client;
        private Chambre $chambre;
        private DateTime $dateDebut;
        private DateTime $dateFin;
        private Hotel $hotel;
    
        
        public function __construct(Client $client, Chambre $chambre, Hotel $hotel,string $dateDebut, string $dateFin ) {
            
            
            $this->client = $client;
            $this->chambre = $chambre;
            $this->hotel = $hotel;
            $this->hotel->AjouterReservation($this);
            $this->chambre->AjouterReservation($this);
            $this->client->AjouterReservation($this);
            $this->dateDebut = new DateTime($dateDebut);
            $this->dateFin = new DateTime($dateFin);
            
        }

        //GETTER
        public function getClient() {
            return $this->client;
        }
        public function getChambre() {
            return $this->chambre;
        }
        public function getDateDebut() {
            return $this->dateDebut;
        }
        public function getDateFin() {
            return $this->dateFin;
        }


        //SETTER
        public function setClient(string $NewClient) {
            $this->client = $NewClient;
        }
        public function setChambre(string $NewChambre) {
            $this->chambre = $NewChambre;
        }
        public function setDateDebut(DateTime $NewDateDebut)  {
            $this->dateDebut = $NewDateDebut; 
        }
        public function setDateFin(DateTime $NewDateFin)  {
            $this->dateFin = $NewDateFin;
        }
        // FONCTION CUSTOM
        public function AfficherReservationClient() {
            $result = "<h2> Réservation de ".$this->client->getUsername()." ".$this->client->getName()."</h2> ";
            foreach ($this->reservations as $reservations) {
                return " Hotel :".$this->hotel->getName(). $result .= $reservations->getChambre(); 
            }
            return $result;
        }

        //TO STRING
        public function __toString(){
            return $this->dateDebut->format("d-m-Y")." au ".$this->dateFin->format("d-m-Y");  
        }
    }