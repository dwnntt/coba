<?php
include './koneksi.php';

$id= $_GET['npm'];

$sql= "SELECT * FROM mhs WHERE npm= '$id'";
$res= $conn->query($sql);
$dat= $res->fetch_assoc();

?>
<!DOCTYPE html>
<html>
<head>
	<title>Mahasiswa Detail</title>
</head>
<body>
<?php include 'menu.php'; ?>
<br>
<form name="myform" action="mhs_proc.php" method="POST">
	NPM<br><input type="text" name="npm" id="npm" value="<?= $dat['npm']?>"><br>
	Nama<br><input type="text" name="nama" id="nama" value="<?= $dat['nama']?>"><br>
	Alamat<br><input type="text" name="alamat" id="alamat" value="<?= $dat['alamat']?>"><br>
	<br><input type="submit" name="submit_edit" id="submit_edit" value="SIMPAN">
	<input type="submit" name="submit_delete" id="submit_delete" value="HAPUS">
</form>
</body>
</html>