<?php
require_once __DIR__ . "/Info.php";
class Movie
{
    public $title;
    public $author;
    public $year;
    public $class;

    function __construct(
        string $_title,
        string $_author,
        int $_year,
        Info $_class,

    ) {
        $this->title = $_title;
        $this->author = $_author;
        $this->year = $_year;
        $this->class = $_class;
    }

    function film()
    {
        return "Sono un film! Sono" . " " . $this->title;
    }
}

$IoSonoLeggenda = new Movie("Io Sono Leggenda", "Francis Lawrence", 2007);

$StarWars = new Movie("Star Wars", "George Lucas", 1977);

$LaSfidaDelSamurai = new Movie("Ls Sfida Del Samurai", "Akira Kurosawa", 1961);

$TaxiDriver = new Movie("Taxi Driver", "Marti Scorsese", 1976);

$Avatar = new Movie("Avatar", "James Camroon", 2009);


var_dump($IoSonoLeggenda);
var_dump($IoSonoLeggenda->film());

var_dump($StarWars);
var_dump($StarWars->film());

var_dump($LaSfidaDelSamurai);

var_dump($TaxiDriver);

var_dump($Avatar);
