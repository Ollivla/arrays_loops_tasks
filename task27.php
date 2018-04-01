<?php
/* Создать генератор случайных таблиц. Есть переменные: $row - кол-во строк в таблице, $cols - кол-во столбцов в таблице.
* Есть список цветов, в массиве: $colors = array('red','yellow','blue','gray','maroon','brown','green'). Необходимо создать
* скрипт, который по заданным условиям выведет таблицу размера $rows на $cols, в которой все ячейки будут иметь цвета,
* выбранные случайным образом из массива $colors. В каждой ячейке должно находиться случайное число. */

$rows = 5; // number of rows(tr)
$cols = 5; // number of columns(td)

$colors = [
    'red', 'yellow', 'blue', 'gray', 'maroon', 'brown', 'green'
];

$table = "<table border='1' cellpadding='17'>";
for ($tr = 1; $tr <= $rows; $tr++){
    $table .= '<tr>';
    for ($td = 1; $td <= $cols; $td++){
        shuffle($colors);
        $table .= "<td style='background-color:$colors[0]'>".rand(1, 500).'</td>';
    }
    $table .= '</tr>';
}
$table .= '</table>';
echo $table;