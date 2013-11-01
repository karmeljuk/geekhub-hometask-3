<?php

abstract class AbstractTent
{
    public $capacity; //seats in the tent
    public $weight; //tent weight
    public $type; //type of tent
    public $reviews; //reviews on tent
    public $price; //tent price

    abstract public function raiting($rate); //tent raiting

    public function initialization($arr)
    {
        $this->capacity = $arr['capacity'];
        $this->weight 	= $arr['weight'];
        $this->type 		= $arr['type'];
        $this->reviews 	= $arr['reviews'];
        $this->price 		= $arr['price'];
    }

    public function print_data()
    {
        echo "<br>";
        print_r($this);
    }

}