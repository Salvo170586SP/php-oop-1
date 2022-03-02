<?php

require __DIR__ . '/data/movies.php';

class Movie
{
    public $id;
    public $title;
    public $poster;
    public $genre;
    public $years;

    public function __construct($id, $title, $poster, $genre, $years)
    {
        $this->id = $id;
        $this->title = $title;
        $this->poster = $poster;
        $this->genre = $genre;
        $this->years = $years;
    }
 
    public function onAir()
    {
        if($this->years < '2021'){
           return 'On Air';
        }else{
            return 'Coming Soon';
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
    <style>
        img{
            width: 150px;
        }
        .movies-container{
            display: flex;
            justify-content: center;
        }
        .card-movie{
            width: min-content;
            padding: 30px;
        }
    </style>
</head>
<body>
    <div class="movies-container">
        <?php foreach($movies as $movie):
            $obj_movie = new Movie($movie['id'], $movie['title'], $movie['poster'], $movie['genre'], $movie['years']) 
        ?>

        <!-- card-movie -->
        <div class="card-movie">
            <img src="<?= $obj_movie->poster ?>" alt="">
           <h2><?= $obj_movie->title ?></h2>
           <p><?= $obj_movie->genre ?></p>
           <span><?= $obj_movie->years ?></span>
           <h3><?= $obj_movie->onAir() ?></h3>
        </div>
           
        <?php endforeach?>
    </div>
</body>
</html>