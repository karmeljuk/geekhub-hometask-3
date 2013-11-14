<?php

namespace Tent\Fond;

use Tent\Fond\AbstractTent;

class TentCampus extends AbstractTent
{
    public function raiting($rate)
    {
        if ($rate > 3)
        {
            echo "<br> You should buy this tent";
        }
        return $rate;
    }

}