<?php

	#doc
	#	classname:	Tent
	#	scope:		PUBLIC
	#
	#/doc
	
	abstract class Tent
	{
		public $capacity; //seats in the tent
		public $weight; //tent weight
		public $type; //type of tent
		public $reviews; //reviews on tent
		
		abstract public function rating(points); //tent raiting
		
		public function initialization($arr)
		{
			$this->capacity = $arr['capacity'];
			$this->weight 	= $arr['weight'];
			$this->type 		= $arr['type'];
			$this->reviews 	= $arr['reviews'];			
		}
		
		public function print_data()
		{
			echo "<br>";
			print_r($this);
		}
	
	}
	
	

?>
