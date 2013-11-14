<?php

namespace Tent;
use Tent\Fond\TentTerraNova;

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

        return $params;
    }
}