<?php
require_once 'db.php';
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
            <?php
                foreach ($movies as $movie) {
                    echo "<p class='mb-4'> Titolo: " . $movie->title . ", Regista: " . $movie->director . ", Generi: " . $movie->getGenres() . "</p>";
                }
            ?>
        </div>
        
    </div>


    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>