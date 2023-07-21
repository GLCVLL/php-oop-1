<?php

require_once 'actor.php';

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
        $info = "Titolo: " . $this->title . ", Genere: " . $this->genre . ", Anno di uscita: " . $this->releaseYear . "<br>";
        foreach ($this->actors as $actor) {
            $info .= "Attore: " . $actor->getInfo() . "<br>";
        }
        return $info;
    }
}

// Creazione di oggetti Actor per gli attori
$actor1 = new Actor("Leonardo DiCaprio", 46);
$actor2 = new Actor("Morgan Freeman", 85);
$actor3 = new Actor("Tom Hanks", 65);
$actor4 = new Actor("Emma Stone", 33);

// Creazione di due oggetti Movie
$movie1 = new Movie("Inception", "Fantascienza", 2010);
$movie2 = new Movie("Forrest Gump", "Drammatico", 1994);

// Aggiunta degli attori ai film
$movie1->addActor($actor1);
$movie1->addActor($actor2);

$movie2->addActor($actor3);
$movie2->addActor($actor4);

// Stampa delle informazioni relative ai due film
echo "Film 1:<br>" . $movie1->getInfo() . "<br><br>";
echo "Film 2:<br>" . $movie2->getInfo() . "<br>";