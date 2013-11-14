<?php

namespace Tent;

use Tent\TerraNovaSolarCompetition2;
use Symfony\Component\HttpFoundation\Response;

class Controller
{
    public function tentTerraView()
    {
        $tent = new TerraNovaSolarCompetition2();
        $tent -> AboutTerraNovaSolar();
        ob_start();
        include_once("View/tents.php");
        $view = ob_get_clean();
        $response = new Response($view);
        return $response;
    }
}
