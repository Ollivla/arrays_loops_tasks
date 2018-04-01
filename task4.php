<?php
/*Дан массив $arr. С помощью первого цикла foreach выведите на экран столбец ключей, с помощью второго — столбец элементов.
$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой')*/

$arr = [
    'green'=>'зеленый', 'red'=>'красный','blue'=>'голубой'
    ];
echo "Keys: <br/>";
foreach ($arr as $key=>$value){
    echo $key.'<br/>';
}
echo "<br/> Values: <br/>";
foreach ($arr as $key=>$value){
    echo $value.'<br/>';
}
