<?php

class Movie
{
    public $name;


    function film()
    {
        return "Sono un film!";
    }
}

$IoSonoLeggenda = new Movie();
$IoSonoLeggenda->name =  "IoSonoLeggenda";

$StarWars = new Movie();
$StarWars->name = "StarWars";


print_r($IoSonoLeggenda);
print_r($IoSonoLeggenda->film());

print_r($StarWars);
print_r($StarWars->film());
