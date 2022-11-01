<?php 

class Cars{
	static $brand = 'tesla';

	static function car_detail(){
		return self::$brand;
	}
}


$bmw = new Cars();

class Trucks extends Cars{
	static function display(){
		echo parent::car_detail();
	}
}
Trucks::display();

?>