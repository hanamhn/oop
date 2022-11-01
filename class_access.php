<?php 

class Cars{
	public $wheel_count = 4;
	private $door_count = 4;
	protected $seat_count = 2;
	private $brand = 'tesla';

	function car_detail(){
		echo $this->wheel_count;
		echo $this->door_count;
		echo $this->seat_count;
	}

	function car_brand(){
		echo $this->brand;
	}
}


$bmw = new Cars();

// echo $bmw->wheel_count."<br/>";
// echo $bmw->door_count."<br/>";
echo $bmw->seat_count."<br/>";
// echo $bmw->car_brand();

?>