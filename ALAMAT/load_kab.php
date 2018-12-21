<?php
include 'koneksi.php';
$propinsi_id = $_POST['propinsi_id'];

$sql= "SELECT * FROM kabupaten
		WHERE propinsi_id = '$propinsi_id'
		ORDER BY nama";
$res = $conn->query($sql);
		if ($res->num_rows > 0 ){
			while($dat = $res ->fetch_assoc()){
				echo "<option value='".$dat['id']."'>".$dat['nama']."</option>";
			}
		}
?>