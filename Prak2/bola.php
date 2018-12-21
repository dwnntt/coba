<!DOCTYPE html>
<html>
<head>
	<title>Luas dan Volume BOLA</title>
</head>
<body>
<h3> Menghitung Luas dan Volume Bola</h3>
<?php
$jari=$_POST['jari'];
class bola{
	function luas($jari){
		$luas= 4*pi() * pow($jari,2);
		return number_format($luas,2);
	}
	function volume($jari){
		$volume = 4/3 * pi()* pow($jari,3);
		return number_format($volume,2);
	}
}
?>
<form action="bola.php" method="post">
Masukkan Jari Jari : <input type="text" name="jari" value="<?php echo "$jari" ?>"><br><br>
<input type="submit" name="submit" value="Hitung">
</form>
<?php
$hitung = new bola();
$luas_bola = $hitung-> luas($jari);
$volume_bola = $hitung-> volume($jari);
echo "Luas Bola : ".$luas_bola."<br>";
echo "Volume Bola : ".$volume_bola."<br>";
?>
</body>
</html>