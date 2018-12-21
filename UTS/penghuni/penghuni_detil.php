<?php
include '../koneksi.php';

$id= $_GET['id'];

$sql= "SELECT * FROM penghuni WHERE id= '$id'";
$res= $conn->query($sql);
$dat= $res->fetch_assoc();

?>
<!DOCTYPE html>
<html>
<head>
	<title>kamar Detail</title>
</head>
<body>
<?php include 'menu.php'; ?>
<br>
<form name="myform" action="penghuni_proc.php" method="POST">
	Kode Penghuni<br><input type="text" name="id" id="id_old" disabled value="<?= $dat['id']?>">
	<input type="hidden" name="id" id="id" value="<?= $dat['id']?>">
	<br>Nama Penghuni<br><input type="text" name="nama" id="nama" size="30" value="<?= $dat['nama']?>">
	<br>Alamat Penghuni<br><input type="text" name="alamat" id="alamat" size="30" value="<?= $dat['alamat']?>">
	<br><br>Kota Asal

	<select name="kota_id">
	<?php
		$sql_kota= "SELECT * FROM kota ORDER BY nama";
		$res_kota= $conn->query($sql_kota);
		while($dat_kota= $res_kota->fetch_assoc()){
			if($dat_kota['id']==$dat['kota_id'])
			echo"<option value='".$dat_kota['id']."' selected='selected'>".$dat_kota['nama']."</option>";
			else
				echo "<option value='".$dat_kota['id']."'>".$dat_kota['nama']."</option>";
		}
	?>
	</select>
	<br><br>Kamar
	<select name="kamar_id">
	<?php
		$sql_kamar= "SELECT * FROM kamar ORDER BY nama";
		$res_kamar= $conn->query($sql_kamar);
		while($dat_kamar= $res_kamar->fetch_assoc()){
			if($dat_kamar['id']==$dat['kamar_id'])
			echo"<option value='".$dat_kamar['id']."' selected='selected'>".$dat_kamar['nama']."</option>";
			else
				echo "<option value='".$dat_kamar['id']."'>".$dat_kamar['nama']."</option>";
		}
	?>
	</select>
	<br>
	<br><input type="submit" name="submit_edit" id="submit_edit" value="SIMPAN">
	<input type="submit" name="submit_delete" id="submit_delete" value="HAPUS">
</form>
</body>
</html>