<?php

use Cars as GlobalCars;

class Cars{

	var $wheel_count = 4;
	var $door_count = 4;

	function car_detail(){
		return "This car has ".$this->wheel_count;
	}

}

$the_methods = get_class_methods('Cars');

// foreach($the_methods as $value){
// 	echo $value."<br/>";
// }

$bugati = new Cars();
$bmw = new Cars();

// echo $bugati->wheel_count = 10;
// echo "<br/>";

// echo $bmw->wheel_count."<br/>";
// echo $bmw->car_detail();

class Trucks extends GlobalCars{

}

$tacoma = new Trucks();
echo $tacoma->wheel_count."<br/>";
echo $tacoma->car_detail();

?> 