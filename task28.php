<?php
// Вывести таблицу умножения с помощью двух циклов for

$rows = 10; // number of rows(tr)
$cols = 10; // number of columns(td)

$table = '<table border="1" cellpadding="6">';

for ($tr = 1; $tr <= $rows; $tr++){
    $table .= '<tr>';
    for ($td = 1; $td <= $cols; $td++){
        $table .= '<td>'. $tr * $td .'</td>';
    }
    $table .= '</tr>';
}
$table .= '</table>';
echo $table;