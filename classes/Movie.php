<?php
class Movie {
    private $title;
    public $genres;

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

    public function getGenre(){
        return $this->genre;
    }

    public function setGenre($_genre){
        $this->genre = $_genre;
    }
}