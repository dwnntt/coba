<?php
include './koneksi.php';

$id= $_GET['id'];

$sql= "SELECT * FROM ta WHERE id= '$id'";
$res= $conn->query($sql);
$dat= $res->fetch_assoc();

?>
<!DOCTYPE html>
<html>
<head>
	<title>TA Detail</title>
</head>
<body>
<?php include 'menu.php'; ?>
<br>
<form name="myform" action="ta_proc.php" method="POST">
	ID<br><input type="text" name="id" id="id" value="<?= $dat['id']?>"><br>
	Nama<br><input type="text" name="nama" id="nama" value="<?= $dat['nama']?>"><br>
	<br><input type="submit" name="submit_edit" id="submit_edit" value="SIMPAN">
	<input type="submit" name="submit_delete" id="submit_delete" value="HAPUS">
</form>
</body>
</html>