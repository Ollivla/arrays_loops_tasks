<?php
/* Составьте массив дней недели. С помощью цикла foreach выведите все дни недели, а текущий день выведите курсивом.
Текущий день должен храниться в переменной $day */
$days = [
    1 => 'Monday',
    2 => 'Tuesday',
    3 => 'Wednesday',
    4 => 'Thursday',
    5 => 'Friday',
    6 => 'Saturday',
    7 => 'Sunday'
];
$day = date('w');
foreach ($days as $k => $v) {
    if ($k == $day) {
        echo '<i>'.$v.'</i><br>';
    }
    else {
        echo $v.'<br/>';
    }
}