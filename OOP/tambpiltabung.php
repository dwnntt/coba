<?php
	include 'tabung.php';
	$kalkulator = new bangun;

	$r= 7;
	$t= 10;

$hasil_tabung= $kalkulator->tabung($r,$t);
	echo "Volume Tabung = 3.14 x $r x $r x $t = $hasil_tabung";
	echo "<br>".$kalkulator->terbilang($hasil_tabung);
?>