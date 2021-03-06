<?php

require __DIR__ . '/data/movies.php';

class Movie
{
    public $id;
    public $title;
    public $poster;
    public $genre;
    public $years;
    public $on_air;

    public function __construct($id, $title, $poster, $genre, $years, $on_air = 'Coming Soon')
    {
        $this->id = $id;
        $this->title = $title;
        $this->poster = $poster;
        $this->genre = $genre;
        $this->years = $years;
        $this->on_air = $on_air;
    }

    public function onAir()
    {
        if ($this->years < 2021) {
            return 'On Air';
        } else {
            return $this->on_air;
        }
    }
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu+Mono:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="movies-container">
        <?php foreach ($movies as $movie) :
            $obj_movie = new Movie($movie['id'], $movie['title'], $movie['poster'], $movie['genre'], $movie['years'])
        ?>

            <!-- card-movie -->
            <div class="card-movie">
                <img src="<?= $obj_movie->poster ?>" alt="<?= $obj_movie->title ?>">
                <h2><?= $obj_movie->title ?></h2>
                <p>Genere: <?= $obj_movie->genre ?></p>
                <span>Anno di uscita: <?= $obj_movie->years ?></span>
                <h3><?= $obj_movie->onAir() ?></h3>
            </div>

        <?php endforeach ?>
    </div>
</body>

</html>