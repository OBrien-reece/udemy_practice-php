<?php  

class Car {

	public $wheel_count = 4;
	static $door_count = 7;	

	function carDetails() {

		echo $this->wheel_count;
		echo $this->door_count;
		echo $this->seat_count;
	}
}

$bmw = new Car();
echo $bmw->wheel_count;

echo Car::$door_count;