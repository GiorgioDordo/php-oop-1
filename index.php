<?php require_once __DIR__ . "/movie/Info.php" ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP 1</title>
</head>

<body>
    <?php

    class Movie
    {
        public $title;
        public $author;
        public $year;

        function __construct(
            string $_title,
            string $_author,
            int $_year
        ) {
            $this->title = $_title;
            $this->author = $_author;
            $this->year = $_year;
        }

        // function film()
        // {
        //     return "Sono un film! Sono" . " " . $this->title;
        // }
    }

    $fantascienza = new Info(4.6 / 5, "Fantascienza");
    $horrorAzione = new Info(3 / 5, "Horror/Azione");
    $azione = new Info(4.7 / 5, "Azione");
    $drammatico = new Info(4.3 / 5, "Drammatico");

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
    ?>
</body>

</html>