<?php

class Movie {
    public $title;
    public $lang;
    public $year;
    public $duration;
    public $poster = null;
    public $actors = 0;
    public $cast = [];

    
    function __construct($title, $lang, $duration, $poster, $year, $cast = []){
        $this->title = $title;
        $this->lang = $lang;
        $this->duration = $duration;
        $this->poster = $poster;
        $this->year = $year;
        $this->cast = [
            'actors' => $this->numOfActors($cast),
            'cast' => $cast,
        ];
    }
    
    public function numOfActors($cast){
        return count($cast);
    }
}