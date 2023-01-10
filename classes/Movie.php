<?php

/**
 * Movie
 * 
 * @author Samuele Madrigali
 */
class Movie {
    public $title;
    public $genres;
    public $actors;
    public $duration;
    public $plot;
    public $year;

    public function __construct( string $title, array $genres, array $actors, int $duration, string $plot = "", string $year = "")
    {
        $this->title = $title;
        $this->genres = $genres;
        $this->actors = $actors;
        $this->duration = $duration;
        $this->plot = $plot;
    }
    
    /**
     * get info about movie.
     *
     * @return string
     */
    public function getInfo()
    {
        return "Titolo: {$this->title} e durata: {$this->duration}";
    }
}