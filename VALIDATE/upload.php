<?php
if (!empty($_FILES['foto']['tmp_name'])) {
	$nama_file = "fotoku.jpg";
	$file_dir = "foto/".$nama_file;
	if(!move_uploaded_file($_FILES['foto']['tmp_name'], $file_dir)){
		die('Upload Foto GAGAL');
	}else{
		echo "Upload Foto Berhasil";
	}
}
?>