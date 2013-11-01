<?php

	#doc
	#	classname:	Tent_TerraNova
	#	scope:		PUBLIC
	#	Class describes the first tent
	#/doc
	
class TentTerraNova extends AbstractTent
{

    #	Constructor
    public function __construct ($arr)
    {
        $this -> initialization($arr);
    }

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
