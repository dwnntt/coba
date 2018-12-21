<!DOCTYPE html>
<html>
<head>
<title>kamar add</title>
</head>
<body>
<?php include 'menu.php';?>
<br>
<form name="myform" action="kamar_proc.php" method="POST">
	ID
	<br><input type="text" name="id" id="id">
	<br>Nama<br><input type="text" name="nama" id="nama" size="30"><br>
	<br><input type="submit" name="submit_add" id="submit_add" value="SIMPAN">
</form>
</body>
</html>