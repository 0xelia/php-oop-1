<?php

class Movie {
    public $title;
    public $lang;
    public $year;
    public $poster = null;
    public $cast = [];

    function __construct($title, $lang, $poster, $year, $cast = []){
        $this->title = $title;
        $this->lang = $lang;
        $this->poster = $poster;
        $this->year = $year;
        $this->cast = $cast;
    }

    function 
}