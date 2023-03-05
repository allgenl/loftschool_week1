<?php

	$bmw = [
		"name" => "bmw",
		"model" => "X5",
		"speed" => 120,
		"doors" => 5,
		"year" => "2015"
	];

	$opel = [
		"name" => "opel",
		"model" => "astra",
		"speed" => 110,
		"doors" => 5,
		"year" => "2011"
	];

	$toyota = [
		"name" => "toyota",
		"model" => "Corolla",
		"speed" => 130,
		"doors" => 5,
		"year" => "2020"
	];

	$cars = [$bmw, $opel, $toyota];

	foreach ($cars as $cars => $car) {
		echo "CAR ";
		foreach ($car as $key => $value) {
			if ($key == "name") {
				echo $value . "<br>";
				continue;
			} 
			echo $value . " ";
		}
		echo "<br><br>";
	}

?>