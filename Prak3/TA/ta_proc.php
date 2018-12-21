<?php
include './koneksi.php';
if(isset($_POST['submit_add'])){
	$id = $_POST['id'];
	$nama = $_POST['nama'];

	$sql = "INSERT INTO ta
			(id,nama) VALUES
				('$id','$nama')";
	if(!$conn->query($sql))
		die('Tambah ta Gagal');
	else
		header("Location: ta.php");
}
if(isset($_POST['submit_edit'])){
	$id = $_POST['id'];
	$nama = $_POST['nama'];

	$sql = "UPDATE ta
			SET nama='$nama'
			WHERE id='$id'";
	if(!$conn->query($sql))
		die('Edit ta Gagal');
	else
	header("Location: ta.php");
}
if(isset($_POST['submit_delete'])){
	$id = $_POST['id'];
	$sql = "DELETE FROM ta
			WHERE id='$id'";
	if(!$conn->query($sql))
		die('Hapus ta Gagal');
	else
		header("Location: ta.php");
}
?>