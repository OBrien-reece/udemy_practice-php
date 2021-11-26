<?php  

class Cars {

	public $wheel_count = 4;
	static $door_count = 5;

	function __construct() {
		echo $this->wheel_count;
		echo self::$door_count++;
	}

}

$bmw = new Cars();
$bmw1 = new Cars();
$bmw2 = new Cars();










