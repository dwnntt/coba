<?php
include '../koneksi.php';
if(isset($_POST['submit_add'])){
	$id = $_POST['id'];
	$nama = $_POST['nama'];

	$sql = "INSERT INTO kota
			(id,nama) VALUES
				('$id','$nama')";
	if(!$conn->query($sql))
		die('Tambah kota Gagal');
	else
		header("Location: kota.php");
}
if(isset($_POST['submit_edit'])){
	$id = $_POST['id'];
	
	$nama = $_POST['nama'];

	$sql = "UPDATE kota
			SET nama='$nama'
			WHERE id='$id'";
	if(!$conn->query($sql))
		die('Edit kota Gagal');
	else
	header("Location: kota.php");
		//echo $sql;
}
if(isset($_POST['submit_delete'])){
	$id = $_POST['id'];
	$sql = "DELETE FROM kota
			WHERE id='$id'";
	if(!$conn->query($sql))
		die('Hapus kota Gagal');
	else
		header("Location: kota.php");
}
?>