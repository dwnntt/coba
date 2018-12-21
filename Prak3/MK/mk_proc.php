<?php
include './koneksi.php';
if(isset($_POST['submit_add'])){
	$kode = $_POST['kode'];
	$nama = $_POST['nama'];

	$sql = "INSERT INTO mk
			(kode,nama) VALUES
				('$kode','$nama')";
	if(!$conn->query($sql))
	die('Tambah mk Gagal');
else
header("Location: mk.php");
}
if(isset($_POST['submit_edit'])){
	$kode = $_POST['kodee'];
	$nama = $_POST['nama'];

	echo $sql = "UPDATE mk
			SET nama='$nama'
			WHERE kode='$kode'";
	if(!$conn->query($sql))
	die('Edit mk Gagal');
	else
		//echo $sql;
	header("Location: mk.php");
}
if(isset($_POST['submit_delete'])){
	$kode = $_POST['kode'];
	$sql = "DELETE FROM mk
			WHERE kode='$kode'";
	if(!$conn->query($sql))
		die('Hapus mk Gagal');
	else
		header("Location: mk.php");
}
?>