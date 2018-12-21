<?php
include './koneksi.php';

$id= $_GET['kode'];

$sql= "SELECT * FROM mk WHERE kode= '$id'";
$res= $conn->query($sql);
$dat= $res->fetch_assoc();

?>
<!DOCTYPE html>
<html>
<head>
	<title>MK Detail</title>
</head>
<body>
<?php include 'menu.php'; ?>
<br>
<form name="myform" action="mk_proc.php" method="POST">
	Kode<br><input type="text" name="kodee" id="kodee" value="<?= $dat['kode']?>"><br>
	Nama<br><input type="text" name="nama" id="nama" value="<?= $dat['nama']?>"><br>
	<input type="hidden" name="kode" id="kode" value="<?= $dat['kode']?>">
	<br><input type="submit" name="submit_edit" id="submit_edit" value="SIMPAN">
	<input type="submit" name="submit_delete" id="submit_delete" value="HAPUS">
</form>
</body>
</html>