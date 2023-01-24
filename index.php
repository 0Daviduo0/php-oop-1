<?php

class Movie {

    public $length;
    public $title;
    public $releaseYear;
    public $genre;
    public $description;
    public $streamingPlatform;

    public function __construct($length, $title, $releaseYear, $genre, $description, $streamingPlatform){

        $this->length = $length;
        $this->title = $title;
        $this->releaseYear = $releaseYear;
        $this->genre = $genre;
        $this->description = $description;
        $this->streamingPlatform = $streamingPlatform;

    }

    public function completeTitleInfo() {

        return $this->title . " (" . $this->releaseYear . ")" . " - " . $this->genre;

    }

}


