<?php

class Movie
{
    public $title;
    public $author;
    public $year;

    function __construct($_title, $_author, $_year)
    {
        $this->title = $_title;
        $this->author = $_author;
        $this->year = $_year;
    }

    function film()
    {
        return "Sono un film! Sono" . " " . $this->title;
    }
}

$IoSonoLeggenda = new Movie("Io Sono Leggenda", "Francis Lawrence", 2007);
$IoSonoLeggenda->title =  "IoSonoLeggenda";

$StarWars = new Movie("Star Wars", "George Lucas", 1977);
$StarWars->title = "StarWars";


var_dump($IoSonoLeggenda);
var_dump($IoSonoLeggenda->film());

var_dump($StarWars);
var_dump($StarWars->film());