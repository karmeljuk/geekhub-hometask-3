<?php

class TentTerraNova extends AbstractTent
{
    #	Constructor
    public function __construct ($arr)
    {
        $this -> initialization($arr);
    }

    public function rating($rate)
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
