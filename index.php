<?php

class Movie {

    public $length;
    public $title;
    public $description;
    public $streamingPlatform;

    public function __construct($length, $title, $description, $streamingPlatform){

        $this->length = $length;
        $this->title = $title;
        $this->description = $description;
        $this->streamingPlatform = $streamingPlatform;

    }

}


