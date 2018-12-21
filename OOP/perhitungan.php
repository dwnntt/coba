<?php
	include 'calculator.php';
	$kalkulator = new calc;

	$bil1 = 5;
	$bil2 = 10;
	$bil1a= 3;
	$bil2a= 15;
	$r= 7;
	$t= 10;

	$hasil_tambah = $kalkulator->tambah($bil1,$bil2);
	echo "$bil1 + $bil2 = $hasil_tambah";
	echo "<br>".$kalkulator->terbilang($hasil_tambah); 

	echo "<br><br>";

	$hasil_tambah = $kalkulator->tambah($bil1a,$bil2a);
	echo "$bil1a + $bil2a = $hasil_tambah";
	echo "<br>".$kalkulator->terbilang($hasil_tambah); 

	echo "<br><br>";

	$hasil_kali = $kalkulator->kali($bil1,$bil2);
	echo "$bil1 * $bil2 = $hasil_kali";
	echo "<br>".$kalkulator->terbilang($bil1)." kali ".$kalkulator->terbilang($bil2)." sama dengan ".$kalkulator->terbilang($hasil_kali); 
	echo "<br><br>";

	$hasil_kali = $kalkulator->kali($bil1a,$bil2a);
	echo "$bil1a * $bil2a = $hasil_kali";
	echo "<br>".$kalkulator->terbilang($bil1a)." kali ".$kalkulator->terbilang($bil2a)." sama dengan ".$kalkulator->terbilang($hasil_kali); 
	echo "<br><br>";

	$hasil_tabung= $kalkulator->tabung($r,$t);
	echo "Volume Tabung = 3.14 x $r x $r x $t = $hasil_tabung";
	echo "<br>".$kalkulator->terbilang($hasil_tabung);
	

?>