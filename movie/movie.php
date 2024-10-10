<?php
require_once __DIR__ . "/Info.php";
class Movie
{
    public string $title;
    public string $author;
    public string $year;
    public $class;

    function __construct(
        string $_title,
        string $_author,
        string $_year,
        info $_class,

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

$fantascienza = new info("4/5", "Fantascienza");
$horrorAzione = new info("4/5", "Horror/Azione");
$azione = new info("4/5", "Azione");
$drammatico = new info("4/5", "Drammatico");

$IoSonoLeggenda = new Movie("Io Sono Leggenda", "Francis Lawrence", 2007, $horrorAzione);

$StarWars = new Movie("Star Wars", "George Lucas", 1977, $fantascienza);

$LaSfidaDelSamurai = new Movie("Ls Sfida Del Samurai", "Akira Kurosawa", 1961, $azione);

$TaxiDriver = new Movie("Taxi Driver", "Marti Scorsese", 1976, $drammatico);

$Avatar = new Movie("Avatar", "James Camroon", 2009, $fantascienza);


print_r($IoSonoLeggenda);

var_dump($StarWars);

var_dump($LaSfidaDelSamurai);

var_dump($TaxiDriver);

var_dump($Avatar);
