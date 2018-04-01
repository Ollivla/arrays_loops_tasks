<?php
/* Составьте массив месяцев. С помощью цикла foreach выведите все месяцы, а текущий месяц выведите жирным.
Текущий месяц должен храниться в переменной $month. */
$months = [
    '01' => 'January',
    '02' => 'February',
    '03' => 'March',
    '04' => 'April',
    '05' => 'May',
    '06' => 'June',
    '07' => 'July',
    '08' => 'August',
    '09' => 'September',
    '10' => 'October',
    '11' => 'November',
    '12' => 'December',
];
$month = date('m'); //sequence number of the month
foreach ($months as $k => $v) {
    if ($k == $month) {
        echo '<b>'.$v.'</b><br>';
    }
    else {
        echo $v.'<br/>';
    }
}