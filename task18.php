<?php
/*  Составьте массив дней недели. С помощью цикла foreach выведите все дни недели, выходные дни следует вывести жирным */
$days = [
    'Monday',
    'Tuesday',
    'Wednesday',
    'Thursday',
    'Friday',
    'Saturday',
    'Sunday'
];
foreach ($days as $k => $v) {
    if ($k <= 4) {
        echo $v. '<br>';
    }
    else {
        echo '<b>'.$v.'</b><br>';
    }
}