<?php
function task1($array, $merge = false)
{
    if ($merge == true) {
        $merge_string = "";
        foreach ($array as $key => $value) {
            $merge_string = $merge_string . $value;
        }
        return $merge_string;
    } else {
        foreach ($array as $key => $value) {
            echo "<p>" . $value . "</p>";
        }
    }
}

function task2(string $action, ...$args)
{
    foreach ($args as $numb => $arg) {
        if (!is_int($arg) && !is_float($arg)) {
            trigger_error('argument #' . $numb . ' is not integer or float');
            return 'ERROR: not integer or float';
        }
    }

    switch ($action) {
        case '+':
            return array_sum($args);
        case '-':
            return array_shift($args) - array_sum($args);
        case '/':
            $result = array_shift($args);
            foreach ($args as $arg) {
                if ($arg == 0) {
                    trigger_error('derive by zero');
                    return 'ERROR: derive by zero';
                }
                $result /= $arg;
            }
            return $result;
        case '*':
            $result = 1;
            foreach ($args as $arg) {
                $result *= $arg;
            }
            return $result;

        default:
            return 'ERROR: unknown';

    }
}

function task3(int $row, int $col)
{
    if ($row < 0 || $col < 0) {
        trigger_error('Argument is not positive');
        return false;
    }

    $result = '<table>';
    for ($i = 1; $i <= $row; $i++) {
        $result .= '<tr>';
        for ($j = 1; $j <= $col; $j++) {
            $result .= '<td>';
            $result .= $i * $j;
            $result .= '</td>';
        }
        $result >= '</tr>';
    }
    $result .= '</table>';
    return $result;
}

function task6(string $filename)
{
    $fp = fopen($filename, 'r');
    if (!$fp) {
        return false;
    }

    $str = '';
    while (!feof($fp)) {
        $str .= fgets($fp, 1024);
    }

    echo $str;
}
?>