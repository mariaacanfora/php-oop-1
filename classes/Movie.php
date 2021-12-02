<?php

class Movie {
    public $data = [
        "title" => "",
        "language" => "",
        "year" => "",
        "originalTitle" => ""
    ];

    function __construct($_dataMovie)
    {
        $this->setDataMovie($_dataMovie);
    }


    public function setDataMovie($_dataMovie)
    {   
        foreach ($_dataMovie as $key => $_movie) {
            if (isset($_dataMovie[$key])) {
                $this->data[$key] = $_dataMovie[$key];
            }
        }
    }

    public function getDataMovie($keyWanted)
    {
        foreach ($this->data as $key => $value) {
            
            if ($keyWanted === $key) {
                return $this->getMovieAttribute($key);
            } 
        }

    }

    public function getMovieAttribute($_attribute)
    {
        return $this->data[$_attribute];
    }

}