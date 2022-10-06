<?php

class Client {
    protected string $_username;
    protected string $_name;
    protected int $_nbrPersonn;

    public function __construct(string $username, string $name, int $nbrPersonn) {
        $this->_username = $username;
        $this->_name = $name;
        $this->_nbrPersonn = $nbrPersonn;
    }

//GETTER

    public function getUsername() {
        return $this->_username;
    }

    public function getName() {
        return $this->_name;
    }

    public function getNbrPersonn() {
        return $this->_nbrPersonn;
    }

//SETTER

    public function setUsername(string $NewUsername) {
        $this->_username = $NewUsername;
    }

    public function setName(string $NewName) {
        $this->_name = $NewName;
    }

    public function setNbrPersonne(int $NewNbrPersonn) {
        $this->_nbrPersonn = $NewNbrPersonn;
    }

//TO STRING

    public function __toString() {
        return $this->_username." ".$this->_name.", nombre de personnes à la reservation : ".$this->_nbrPersonn."<br><br>";
    }


}