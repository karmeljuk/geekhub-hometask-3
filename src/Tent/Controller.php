<?php

namespace Tent;

use Tent\TerraNovaSolarCompetition2;
use Symfony\Component\HttpFoundation\Response;

class Controller
{
    public function tentView()
    {
        $tent = new TerraNovaSolarCompetition2();
        $tent -> AboutTerraNovaSolar();
        return $tent;
    }
}
