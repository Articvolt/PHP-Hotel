<?php

    class Reservation {
        private Hotel $_hotel;
        private Client $_client;
        private Chambre $_chambre;

        public function __construct(Hotel $hotel, Client $client, Chambre $chambre) {
            $this->_hotel = $hotel;
            $this->_client = $client;
            $this->_chambre = $chambre;
        }

        //GETTER
        public function getHotel() {
            return $this->_hotel;
        }
        public function getClient() {
            return $this->_client;
        }
        public function getChambre() {
            return $this->_chambre;
        }

        //SETTER
        public function setHotel(string $NewHotel) {
            $this->_hotel = $NewHotel;
        }
        public function setClient(string $NewClient) {
            $this->_client = $NewClient;
        }
        public function setChambre(string $NewChambre) {
            $this->_chambre = $NewChambre;
        }

        //FUNCTION
    }