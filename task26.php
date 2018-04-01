<?php
/* Вам нужно создать массив и заполнить его случайными числами от 1 до 100 (ф­я rand). Далее, вычислить произведение тех элементов,
которые больше ноля и у которых парные индексы. После вывести на экран элементы, которые больше ноля и у которых не парный индекс */

$arr = [rand(1, 100), rand(1, 100), rand(1, 100), rand(1, 100), rand(1, 100),
    rand(1, 100),rand(1, 100), rand(1, 100), rand(1, 100), rand(1, 100)];
$result = 1;
echo "Primary array: ";
foreach ($arr as $k => $v) {
    echo $v.' ';
}
echo '<br/> Index that bigger than zero and odd: ';
$result = 1;
foreach ($arr as $k => $v) {
    if ($k % 2 == 0 && $k > 0){
        $result *= $v;
        echo $v.' ';
}
}
echo '<br/>Product of index that bigger than zero and odd: '.$result;
echo '<br/>Index that less than zero and even: ';
foreach ($arr as $k => $v){
    if ($k % 2 != 0 && $k > 0){
        echo $v.' ';
    }
}