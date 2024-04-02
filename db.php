<?php
require_once 'Models/Movie.php';

$movies = array(
    new Movie("Inception", "Christopher Nolan", "Sci-Fi"),
    new Movie("The Dark Knight", "Christopher Nolan", array("Action", "Thriller"))
);