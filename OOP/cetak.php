<?php
include "class_utama.php";
$main_class = new class_utama;
$class_turunan = new class_utama;

$main_class->cetak(7);
$main_class->cetak(10);
$main_class->cetak();

echo $class_turunan->b;

?>