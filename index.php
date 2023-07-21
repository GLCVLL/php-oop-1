<?php

class Movie {
    // Variabili d'istanza
    public $title;
    public $genre;
    public $releaseYear;

    // Costruttore della classe
    public function __construct($title, $genre, $releaseYear) {
        $this->title = $title;
        $this->genre = $genre;
        $this->releaseYear = $releaseYear;
    }

}

// Creazione di due oggetti Movie
$movie1 = new Movie("Inception", "Fantascienza", 2010);
$movie2 = new Movie("The Shawshank Redemption", "Drammatico", 1994);
