<?php

namespace Tent;

class TentCampus extends AbstractTent
{
    #	Constructor
    public function __construct ($arr)
    {
        $this -> initialization($arr);
    }

    public function raiting($rate)
    {
        if ($rate > 3)
        {
            echo "<br> You should buy this tent";
        }
        return $rate;
    }

}