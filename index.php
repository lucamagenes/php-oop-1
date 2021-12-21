<?php

class Movie {

    public $title;
    public $genre;
    public $director;
    public $release;


    function __construct(string $title, string $genre, string $director, int $release)
    {
        $this->title = $title;
        $this->genre = $genre;
        $this->director = $director;
        $this->release = $release;
    }

    function getTitle() {
        return $this->title;
    }

    function getGenre() {
        return $this->genre;
    }

    function getDirector() {
        return $this->director;
    }

    function getRelease() {
        return $this->release;
    }


}


$movie_1 = new Movie('Matrix', 'fantasy', 'Lana Wachowski', 1999);
$movie_2 = new Movie('Avenger', 'action', 'Joss Whedon', 2012);

var_dump($movie_1, $movie_2);