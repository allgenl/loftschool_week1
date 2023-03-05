<?php
	
	const ALL_DRAWINGS = 80;
	const MARKER_DRAWINGS = 23;
	const PENCIL_DRAWINGS = 40;

	echo "На школьной выставке " . ALL_DRAWINGS . " рисунков. " . MARKER_DRAWINGS . " из них выполнены фломастерами, " . PENCIL_DRAWINGS . " карандашами, а остальные — красками. Сколько рисунков, выполненные красками, на школьной выставке?<br>";

	$paints = ALL_DRAWINGS - MARKER_DRAWINGS - PENCIL_DRAWINGS;

	echo "<br>Решение:<br>80 - 23 - 40 = $paints <br>";
	echo "<br>Ответ: $paints рисунков выполнены красками.";

?>