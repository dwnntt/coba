<!DOCTYPE html>
<html>
<head>
	<title>Luas dan Volume BALOK</title>
</head>
<body>
<h3> Menghitung Luas dan Volume Balok</h3>
<?php
$p=$_POST['panjang'];
$l=$_POST['lebar'];
$t=$_POST['tinggi'];
class balok{
	function luas($p,$l,$t){
		$luas= 2 *(($p*$l) + ($p*$t) + ($l * $t));
		return round($luas);
	}
	function volume($p,$l,$t){
		$volume = $p * $l * $t;
		return $volume;
	}
}
?>
<form action="balok.php" method="post">
Masukkan Panjang : <input type="text" name="panjang" value="<?php echo "$p" ?>"><br><br>
Masukkan Lebar   : <input type="text" name="lebar" value="<?php echo "$l" ?>"><br><br>
Masukkan Tinggi  : <input type="text" name="tinggi" value="<?php echo "$t" ?>"><br><br>
<input type="submit" name="submit" value="Hitung">
</form>
<?php
$hitung = new balok();
$luas_balok = $hitung-> luas($p,$l,$t);
$volume_balok = $hitung-> volume($p,$l,$t);
echo "Luas Balok : ".$luas_balok."<br>";
echo "Volume Balok : ".$volume_balok."<br>";
?>
</body>
</html>