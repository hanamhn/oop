<?php 

class Cars{
	public $wheel_count = 4;
	static $door_count = 4;
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
// echo $bmw->door_count;
echo Cars::$door_count;

?>