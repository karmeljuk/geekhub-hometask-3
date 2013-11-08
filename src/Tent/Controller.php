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
        //return $tent;
        ob_start();
        include_once("View/tents.php");
        $view = ob_get_clean();
        $response = new Response($view);
        return $response;
        //$response -> print_data();
        //var_dump($response);
    }
}
