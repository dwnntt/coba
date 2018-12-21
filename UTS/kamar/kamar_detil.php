<?php
include '../koneksi.php';

$id= $_GET['id'];

$sql= "SELECT * FROM kamar WHERE id= '$id'";
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
<form name="myform" action="kamar_proc.php" method="POST">
	Kode kamar<br><input type="text" name="id_old" id="id_old" value="<?= $dat['id']?>"><br>
	<input type="hidden" name="id" id="id" value="<?= $dat['id']?>"><br>
	Nama<br><input type="text" name="nama" id="nama" value="<?= $dat['nama']?>"><br>
	<br><input type="submit" name="submit_edit" id="submit_edit" value="SIMPAN">
	<input type="submit" name="submit_delete" id="submit_delete" value="HAPUS">
</form>
</body>
</html>