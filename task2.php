<?php
/*Дан массив с элементами 1, 20, 15, 17, 24, 35.
С помощью цикла foreach найдите сумму элементов этого массива. Запишите ее в переменную $result.*/
$array = [
    1, 20, 15, 17, 24, 35
];
//with help of foreach
$result = 0;
foreach ($array as $v) {
    $result += $v;
}
echo $result.'<br/>';

//but it is easier to do without foreach in this case
$result = array_sum($array);
echo $result;