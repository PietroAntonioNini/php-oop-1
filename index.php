<?php
class Movie {

    // variabili d'istanza
    public $title;
    public $director;
    public $genres = array();

    // costruttore
    public function __construct($title, $director, $genres) {
        $this->title = $title;
        $this->director = $director;
        $this->genres = is_array($genres) ? $genres : array($genres);
    }

    // metodo
    public function getGenres() {
        return implode(", ", $this->genres);
    }
}

// istanzio due oggetti 'Movie'
$movie1 = new Movie("Inception", "Christopher Nolan", "Sci-Fi");
$movie2 = new Movie("The Dark Knight", "Christopher Nolan", array("Action", "Thriller"));
?>

<!DOCTYPE html>
<html lang="it" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php OOP 1</title>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="text-center">
        <h1 class="fs-1 mt-5 mb-5">Movie</h1>

        <!-- stampo i risultati in pagina -->
        <div class="mt-3 fs-4">
            <p class="mb-4"><?php echo "Titolo: " . $movie1->title . ", Regista: " . $movie1->director . ", Generi: " . $movie1->getGenres() . "\n"; ?></p>
            <p><?php echo "Titolo: " . $movie2->title . ", Regista: " . $movie2->director . ", Generi: " . $movie2->getGenres() . "\n"; ?></p>
        </div>

        
    </div>


    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>