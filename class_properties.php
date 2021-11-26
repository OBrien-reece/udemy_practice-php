<?php  

class Cars {
	var $wheel_count = 7;
	
	var $door_count = 5;

	function carDetail() {
		return "This car has " . $this->wheel_count . "wheels";
	}

}

$bmw  = new Cars();

$mercedes = new Cars();

echo $bmw->carDetail();

echo $bmw->wheel_count = 34 ."<br>";

echo $mercedes->wheel_count = 340;










