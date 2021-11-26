<?php  

class Car {

	public $wheel_count = 4;
	private $door_count = 7;
	protected $seat_count = 14;

	function carDetails() {
		echo $this->wheel_count;
		echo $this->door_count;
		echo $this->seat_count;
	}
}

$bmw = new Car();

// echo $bmw->wheel_count;
// echo $bmw->door_count;
// echo $bmw->seat_count

echo $bmw->carDetails();