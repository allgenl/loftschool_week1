<?php

require('functions.php');

// task #1
echo "<p>Task 1</p>";
$array = ["string 1", "string 2", "string 3"];

// 1 parameter
task1($array);

// 2 parameter
echo task1($array, true);
echo "<p>Task 2</p>";

// task #2

//echo task2('+', 2, 5, 6, 8) . "<br>"; // сложение
//echo task2('-', 4, 6, 1, 4) . "<br>"; // вычитание
//echo task2('/', 300, 10, 6) . "<br>"; // деление
//echo task2('/', 300, 10, 6, 0) . "<br>"; // деление на ноль
//echo task2('*', 4, 3, 4, 1) . "<br>"; // умножение
//echo task2('d', 3, 4) . "<br>"; // неизвестный знак
//echo task2('*', '3', 're') . "<br>"; // не число

// task #3

echo '<p>Task 3</p>';
echo task3(3, 4); // корректно
//echo task3(6, 'd'); // некорректно

// task #4
echo '<p>Task 4</p>';
date_default_timezone_set('Europe/Moscow');
echo date('d.m.y h:i'); // point 1
echo '<br>';
echo strtotime('24.02.2016 00:00:00'); // point 2

// task #5
echo '<p>Task 5</p>';
$string = 'Карл у Клары украл Кораллы';
echo str_replace('К', '', $string); // point 1
echo '<br>';
$string2 = 'Две бутылки лимонада';
echo str_replace('Две', 'Три', $string2);

// task #6
echo '<p>Task 6</p>';
file_put_contents('test.txt', 'Hello again!');
task6('test.txt');


?>