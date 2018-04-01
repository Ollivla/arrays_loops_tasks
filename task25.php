<?php
/* Ваше задание создать массив, наполнить это случайными значениями (функция rand), найти максимальное и минимальное значение
и поменять их местами. */
$arr = [rand(1, 100), rand(1, 100), rand(1, 100), rand(1, 100), rand(1, 100),
    rand(1, 100),rand(1, 100), rand(1, 100), rand(1, 100), rand(1, 100)];
$minIndex = 0;
$maxIndex = 0;
$min = min($arr);
$max = max($arr);
echo "Minimum value: " .$min. "<br/> ";
echo "Maximum value: " .$max. " <br/>";
echo "Primary array: ";
foreach ($arr as $k => $v) {
    if ($v == $min){
        $minIndex = $k;}
    if ($v == $max){
        $maxIndex = $k;}
    echo $v.' ';
}
$arr[$minIndex] = $max;
$arr[$maxIndex] = $min;
echo "<br/>", "Modified array: ";
foreach ($arr as $k => $v) {
    echo $v. " ";
}