<?php  

class Car {

	static $wheel_count = 4;

	static function carDetails() {

		return self::$door_count;
		return self::$door_count;
		
	}
}

class Truck extends Car {

	static function display() {
		echo parent::carDetails();
	}
}

Truck::display();
// echo Car::carDetails();

