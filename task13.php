<?php
//Вывести таблицу умножения
echo 'Multiplication table:';
for($i=1; $i<=10; ++$i){
    echo '<br/>';
    for($j=1; $j<=10; ++$j){
        echo "$i * $j = " .$i  *$j. '<br />';
    }
}