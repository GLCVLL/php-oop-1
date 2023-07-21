<?php

require_once __DIR__ '/actor.php';

class Movie {
    // Variabili d'istanza
    public $title;
    public $genre;
    public $releaseYear;
    public $actors = [];

    // Costruttore della classe
    public function __construct($title, $genre, $releaseYear) {
        $this->title = $title;
        $this->genre = $genre;
        $this->releaseYear = $releaseYear;
    }

    public function addActor($actor) {
        $this->actors[] = $actor;
    }

    // Metodo d'istanza
    public function getInfo() {
        return "Titolo: " . $this->title . ", Genere: " . $this->genre . ", Anno di uscita: " . $this->releaseYear;
        foreach ($this->actors as $actor) {
            $info .= "Attore: " . $actor->getInfo() . "<br>";
        }
        return $info;
    }
}

// Creazione di due oggetti Movie
$movie1 = new Movie("Inception", "Fantascienza", 2010);
$movie2 = new Movie("The Shawshank Redemption", "Drammatico", 1994);

// Stampa delle informazioni relative ai due film
echo "Film 1: " . $movie1->getInfo() . "<br>";
echo "Film 2: " . $movie2->getInfo() . "<br>";