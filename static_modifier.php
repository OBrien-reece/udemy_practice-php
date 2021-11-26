<?php  

class Car {

	static $wheel_count = 4;
	static $door_count = 7;	

	static function carDetails() {

		echo Car::$door_count;
		echo Car::$door_count;
		
	}
}

// $bmw = new Car();
// echo $bmw->wheel_count;

echo Car::carDetails();

// echo Car::$door_count;