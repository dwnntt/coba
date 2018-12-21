<?php
include '../koneksi.php';
if(isset($_POST['submit_add'])){
	$mhs_npm= $_POST['mhs_npm'];
	$mk_kode= $_POST['mk_kode'];
	$sem= $_POST['sem'];
	$ta_id= $_POST['ta_id'];
	$nilai= $_POST['nilai'];
	$sql = "INSERT INTO krs
			(mhs_npm,mk_kode,sem,ta_id,nilai)
				VALUES
			('$mhs_npm','$mk_kode','$sem','$ta_id', $nilai)";
	if(!$conn->query($sql))
		//die('Tambah KRS Gagal');
		echo $sql;
	else
		header("Location: krs.php");
}

if(isset($_POST['submit_edit'])){
	$mhs_npm= $_POST['mhs_npm'];
	$mk_kode= $_POST['mk_kode'];
	$sem= $_POST['sem'];
	$ta_id= $_POST['ta_id'];
	$nilai= $_POST['nilai'];

	$sql= "UPDATE krs
			SET mk_kode='$mk_kode',sem= '$sem'
			WHERE mhs_npm='$mhs_npm'";
	if(!$conn->query($sql))
		die('Edit mhs GAGAL!');
	else
		header("Location: krs.php");
}

if(isset($_POST['submit_delete'])){
	$npm= $_POST['mhs_npm'];

	$sql= "DELETE from krs
			WHERE mhs_npm='$mhs_npm'";
	if(!$conn->query($sql))
		die('Hapus mhs GAGAL!');
	else
		header("Location: krs.php");
}
?>