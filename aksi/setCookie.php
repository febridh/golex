<?php

$namakuki = $_POST['namakuki'];
$value = $_POST['value'];
$time = $_POST['durasi'];

setcookie($namakuki, $value, time() + $time, "/");

?>