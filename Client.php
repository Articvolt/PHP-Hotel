<?php

class Client {
    protected string $_username;
    protected string $_name;
    private array $_reservation;

    public function __construct(string $username, string $name) {
        $this->_username = $username;
        $this->_name = $name;
        $this->_reservation = [];
    }

//GETTER
    public function getUsername() {
        return $this->_username;
    }
    public function getName() {
        return $this->_name;
    }

//SETTER
    public function setUsername(string $NewUsername) {
        $this->_username = $NewUsername;
    }

    public function setName(string $NewName) {
        $this->_name = $NewName;
    }

    //TO STRING
    public function __toString(){
        return "$this->_username $this->_name";
    }
}
