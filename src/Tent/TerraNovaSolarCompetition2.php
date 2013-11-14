<?php

namespace Tent;
use Tent\Fond\TentTerraNova;

class TerraNovaSolarCompetition2 extends TentTerraNova
{
    public function __construct()
    {
        parent::__construct(array(
            "capacity" => "2",
            "weight" => "3.17kg",
            "type" => "cupol",
            "reviews" => "Good tent",
            "price" => "3655 UAH",
        ));
    }
}