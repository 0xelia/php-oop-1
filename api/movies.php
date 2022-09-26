<?php

class Movie {
    public $title;
    public $lang;
    public $year;
    public $poster = null;
    public $actors = 0;
    public $cast = [];

    
    function __construct($title, $lang, $poster, $year, $cast = []){
        $this->title = $title;
        $this->lang = $lang;
        $this->poster = $poster;
        $this->year = $year;
        $this->cast = [
            'actors' => numOfActors($cast),
            'cast' => $cast
        ];
    }
    
    public function numOfActors($cast){
        return count($cast);
    }
}