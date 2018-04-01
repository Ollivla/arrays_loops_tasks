<?php
$number = $_POST['number'];
$number = strval($number);
$summ = 0;
for ($i=0,$cnt = strlen($number); $i<$cnt; $i++) {
        $summ += $number[$i];
}
echo 'Sum of digits '.$number.' equal '.$summ;
