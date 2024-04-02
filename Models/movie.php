<?php
class Movie {
    // Variabili d'istanza
    public $title;
    public $director;
    public $genres = array();

    // Costruttore
    public function __construct($title, $director, $genres) {
        $this->title = $title;
        $this->director = $director;
        $this->genres = is_array($genres) ? $genres : array($genres);
    }

    // Metodo
    public function getGenres() {
        return implode(", ", $this->genres);
    }
}