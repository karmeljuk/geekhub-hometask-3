<?php

namespace Tent;
use Tent\Fond\TentTerraNova;
/*
$TerraNovaSolarCompetition2 = new TentTerraNova(array(
    "capacity" => "2",
    "weight" => "3.17kg",
    "type" => "cupol",
    "reviews" => "Good tent",
    "price" => "3655 UAH",
));

$TerraNovaSolarCompetition2 -> print_data();
$TerraNovaSolarCompetition2 -> raiting(3);
$TerraNovaSolarCompetition2 -> print_data();
*/
class TerraNovaSolarCompetition2
{
    public function AboutTerraNovaSolar()
    {
        $params = new TentTerraNova(array(
        "capacity" => "2",
        "weight" => "3.17kg",
        "type" => "cupol",
        "reviews" => "Good tent",
        "price" => "3655 UAH",
        ));

        //$params -> print_data();

        return $params;
        //var_dump($params);
    }
}