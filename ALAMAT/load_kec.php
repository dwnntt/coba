<?php
include 'koneksi.php';
$kabupaten_id = $_POST['kabupaten_id'];

$sql= "SELECT * FROM kecamatan
		WHERE kabupaten_id = '$kabupaten_id'
		ORDER BY nama";
		
$res = $conn->query($sql);
		if ($res->num_rows > 0 ){
			while($dat = $res ->fetch_assoc()){
				echo "<option value='".$dat['id']."'>".$dat['nama']."</option>";
			}
		}
?>