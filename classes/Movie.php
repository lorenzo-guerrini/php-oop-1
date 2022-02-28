<?php
class Movie {
    private $title;
    private $genres;

    public function __construct($_title, $_genre)
    {
        $this->title = $_title;
        $this->genre = $_genre;
    }

    public function getTitle(){
        return $this->title;
    }

    public function setTitle($_title){
        $this->title = $_title;
    }

    public function getGenres(){
        return $this->genre;
    }

    public function addGenre($_genre){
        array_push($this->genres, $_genre);
    }

    public function getInfo() {
        return "{$this->title} {$this->genres}";
    }
}