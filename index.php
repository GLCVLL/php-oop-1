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