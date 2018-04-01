<?php
$number = $_POST['number'];
$digit = $_POST['digit'];
$count = substr_count( $number, $digit);
echo 'Number '.$number.' contains '.$digit.' - '.$count.' times';
