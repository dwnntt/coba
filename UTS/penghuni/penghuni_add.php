<?php
include '../koneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
<title>penghuni add</title>
</head>
<body>
<?php include 'menu.php';?>
<br>
<form name="myform" action="penghuni_proc.php" method="POST">
	ID
	<br><input type="text" name="id" id="id">
	<br>Nama<br><input type="text" name="nama" id="nama" size="30">
	<br>Alamat<br><input type="text" name="alamat" id="alamat" size="30">
	<br><br>Kota Asal

	<select name="kota_id">
	<?php
		$sql_kota= "SELECT * FROM kota ORDER BY nama";
		$res_kota= $conn->query($sql_kota);
		while($dat_kota= $res_kota->fetch_assoc()){
			echo"<option value='".$dat_kota['id']."'>".$dat_kota['nama']."</option>";
		}
	?>
	</select>
	<br><br>Kamar
	<select name="kamar_id">
	<?php
		$sql_kamar= "SELECT * FROM kamar ORDER BY nama";
		$res_kamar= $conn->query($sql_kamar);
		while($dat_kamar= $res_kamar->fetch_assoc()){
			echo"<option value='".$dat_kamar['id']."'>".$dat_kamar['nama']."</option>";
		}
	?>
	</select>
	<br>Telepon<br><input type="text" name="telepon" id="telepon" size="30">
	<br><br><input type="submit" name="submit_add" id="submit_add" value="SIMPAN">
</form>
</body>
</html>