<?php

class Cars {

	var $wheels = 5;

	function carDetails() {

		echo "My vehicle has " . $this->wheels ." wheels";
	}


}

$bmw = new Cars();
echo $bmw->carDetails();

class Trucks extends Cars {

}
echo "<br>";
$tacomaTrucks = new Trucks();
echo $tacomaTrucks->carDetails();