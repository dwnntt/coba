<?php
include '../koneksi.php';

$id= $_GET['id'];

$sql= "SELECT * FROM kota WHERE id= '$id'";
$res= $conn->query($sql);
$dat= $res->fetch_assoc();

?>
<!DOCTYPE html>
<html>
<head>
	<title>KOTA Detail</title>
</head>
<body>
<?php include 'menu.php'; ?>
<br>
<form name="myform" action="kota_proc.php" method="POST">
	Kode Kota<br><input type="text" name="id_lama" id="id_lama" value="<?= $dat['id']?>">
	<input type="hidden" name="id" id="id" value="<?= $dat['id']?>"><br>
	Nama<br><input type="text" name="nama" id="nama" value="<?= $dat['nama']?>"><br>
	<br><input type="submit" name="submit_edit" id="submit_edit" value="SIMPAN">
	<input type="submit" name="submit_delete" id="submit_delete" value="HAPUS">
</form>
</body>
</html>