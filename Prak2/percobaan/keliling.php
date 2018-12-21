<?php
class matematika{
function tambah($a,$b){
$c = $a + $b;
return $c;
}

$math = new matematika();
$a = 10;
$b= 2;
$jumlah = $math -> jumlah($a,$b);

echo "Menghitung 2 Buah Bilangan<br>";
echo "jumlah : ".$jumlah."<br>";
/*echo "Keliling = ".$kel_lingkaran."<br>";
echo "Luas = ".$luas_lingkaran;*/
?>