<?php

namespace Tent\Fond;

use Tent\Fond\AbstractTent;
	
class TentTerraNova extends AbstractTent
{
    public function raiting($rate)
    {
        if($rate == 5){
            $this -> reviews = "Good tent";
        } else
        {
            $this -> reviews = "Bad tent";
        }
        return $rate;
    }

}
