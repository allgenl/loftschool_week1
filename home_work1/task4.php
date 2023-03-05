<?php
	
	$day = mt_rand(0,10);

	echo "Переменная \$day = $day <br>";

	switch ($day) {
		case ($day >= 1 && $day <= 5):
			echo "Это рабочий день<br>";
			break;
		case ($day == 6 || $day == 7):
			echo "Это выходной день<br>";
			break;
		default:
			echo "Неизвестный день<br>";
			break;
	}

?>