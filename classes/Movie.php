<?php

class Movie {
    private $title;
    private $director;
    private $country;
    private $year;
    private $genre;
    private $cast;

    function __construct($_title,$_director,$_country,$_year,$_genre,$_cast)
    {
        $this->title = $_title;
        $this->director = $_director;
        $this->country = $_country;
        $this->year = $_year;
        $this->genre = $_genre;
        $this->cast = $_cast;
    }
    public function getTitle() {
        return $this->title;
    }
    public function getDirector() {
        return $this->director;
    }
    public function getCountry() {
        return $this->country;
    }
    public function getYear() {
        return $this->year;
    }
    public function getGenre() {
        return $this->genre;
    }
    public function getCast() {
        return $this->cast;
    }
}
?>

    