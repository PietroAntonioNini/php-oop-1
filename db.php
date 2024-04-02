<?php
require_once 'Models/movie.php';
require_once 'Models/director.php';

// creo oggetti 'Director'
$nolan = new Director("Christopher", "Nolan", "British");

// creo oggetti 'Movie' utilizzando gli oggetti 'Director'
$movies = array(
    new Movie("Inception", $nolan, "Sci-Fi"),
    new Movie("The Dark Knight", $nolan, array("Action", "Thriller"))
);