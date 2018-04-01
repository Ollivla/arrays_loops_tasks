<?php
/*Дан массив $arr. С помощью цикла foreach запишите английские названия в массив $en,
 а русские — в массив $ru. $arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
 $en = array('green', 'red','blue'); $ru = array('зеленый', 'красный', 'голубой');*/

$arr = ['green'=>'зеленый', 'red'=>'красный','blue'=>'голубой'];
$en = [];
$ru = [];

foreach ($arr as $k => $v) {
    $en[] = $k;
    $ru[] = $v;
}
echo "English: <br/>";
echo '<pre>';
print_r ($en);
echo '</pre>';

echo "Russian: <br/>";
echo '<pre>';
print_r($ru);
echo '</pre>';
