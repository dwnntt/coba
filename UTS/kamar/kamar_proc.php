<?php
include '../koneksi.php';
if(isset($_POST['submit_add'])){
	$id = $_POST['id'];
	$nama = $_POST['nama'];

	$sql = "INSERT INTO kamar
			(id,nama) VALUES
				('$id','$nama')";
	if(!$conn->query($sql))
		die('Tambah kamar Gagal');
	else
		header("Location: kamar.php");
}
if(isset($_POST['submit_edit'])){
	$id = $_POST['id'];
	$id_old = $_POST['id_old'];
	$nama = $_POST['nama'];

	$sql = "UPDATE kamar
			SET nama='$nama', id= '$id_old'
			WHERE id='$id'";
	if(!$conn->query($sql))
		die('Edit kamar Gagal');
	else
	header("Location: kamar.php");
		echo $sql;
}
if(isset($_POST['submit_delete'])){
	$id = $_POST['id'];
	$sql = "DELETE FROM kamar
			WHERE id='$id'";
	if(!$conn->query($sql))
		die('Hapus kamar Gagal');
	else
		header("Location: kamar.php");
}
?>