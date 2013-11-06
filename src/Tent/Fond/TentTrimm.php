<?php

namespace Tent\Fond;

use Tent\Fond\AbstractTent;

class TentTrimm extends AbstractTent implements TamburInterface
{
    public function getTambur(){
      echo "This tent has a tambour";
    }

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
