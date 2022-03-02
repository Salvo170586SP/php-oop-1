<?php
/* 

   => all'interno della classe sono dichiarate delle variabili d'istanza
   => all'interno della classe è definito un costruttore
   => all'interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà
*/

$movies = [
    ['id'=> '5185', 'title'=>'Il Gladiatore','genere'=>'storico','years'=>'2000'],
    ['id'=> '3443', 'title'=>'Il Padrino','genere'=>'drammatico ','years'=>'1972'],
    ['id'=> '4543', 'title'=>'Ritorno al futuro','genere'=>'fantascienza','years'=>'1985'],
    ['id'=> '2232', 'title'=>'Spider-Man: No Way Home','genere'=>'avventura','years'=>'2021'],
    ['id'=> '6743', 'title'=>'Salvate il soldato Ryan','genere'=>'storico','years'=>'1998']
];

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