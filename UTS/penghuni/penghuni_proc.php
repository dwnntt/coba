<?php
include '../koneksi.php';
if(isset($_POST['submit_add'])){
	$id = $_POST['id'];
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$kota_id = $_POST['kota_id'];
	$kamar_id = $_POST['kamar_id'];
	$telepon = $_POST['telepon'];

	$sql = "INSERT INTO penghuni
			(id,nama,alamat,kota_id, kamar_id,telepon) VALUES
				('$id','$nama','$alamat','$kota_id','$kamar_id', '$telepon')";
	if(!$conn->query($sql))
		die('Tambah penghuni Gagal');
	else
		header("Location: penghuni.php");
}
if(isset($_POST['submit_edit'])){
	$id = $_POST['id'];
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$kota_id = $_POST['kota_id'];
	$kamar_id = $_POST['kamar_id'];

	$sql = "UPDATE penghuni
			SET nama='$nama', alamat='$alamat', kota_id='$kota_id', kamar_id= '$kamar_id'
			WHERE id='$id'";
	if(!$conn->query($sql))
		//echo $sql;
		die('Edit penghuni Gagal');
		
	else	
	header("Location: penghuni.php");
}
if(isset($_POST['submit_delete'])){
	$id = $_POST['id'];
	$sql = "DELETE FROM penghuni
			WHERE id='$id'";
	if(!$conn->query($sql))
		die('Hapus penghuni Gagal');
	else
		header("Location: penghuni.php");
}
?>