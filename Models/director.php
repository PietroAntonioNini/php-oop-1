<?php
class Director {
    // Variabili d'istanza
    public $firstName;
    public $lastName;
    public $nationality;

    // Costruttore
    public function __construct($firstName, $lastName, $nationality) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->nationality = $nationality;
    }

    // Metodo
    public function getFullName() {
        return $this->firstName . " " . $this->lastName;
    }
}
