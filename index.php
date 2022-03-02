<?php
/* 

   => all'interno della classe sono dichiarate delle variabili d'istanza
   => all'interno della classe è definito un costruttore
   => all'interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà
*/





class Movie
{
    public $id;
    public $title;
    public $genre;
    public $years;

    public function __construct($id, $title, $genre, $years)
    {
        $this->id = $id;
        $this->title = $title;
        $this->genre = $genre;
        $this->years = $years;
    }


}





?>