<?php
include '../koneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>KRS</title>
</head>
<body>
<h2> Kartu Rencana Study</h2>
<?php include 'menu.php';?><br><br>
<form name="myform" action="krs_proc.php" method="POST">
	Mahasiswa :
	<select name="mhs_npm">
	<?php
		$sql_mhs= "SELECT * FROM mhs ORDER BY nama";
		$res_mhs= $conn->query($sql_mhs);
		while($dat_mhs= $res_mhs->fetch_assoc()){
			echo"<option value='".$dat_mhs['npm']."'>".$dat_mhs['nama']."</option>";
		}
	?>
	</select>
	<br><br>MataKuliah :
	<select name="mk_kode">
	<?php
		$sql_mk= "SELECT * FROM mk";
		$res_mk= $conn->query($sql_mk);
		while($dat_mk= $res_mk->fetch_assoc()){
			echo"<option value='".$dat_mk['kode']."'>".$dat_mk['nama']."</option>";
		}
	?>
	</select>
	<br><br>Semester
	<select name="sem">
	<option value="ganjil">Ganjil</option>
	<option value="genap">Genap</option>
	</select>
	<br><br>Tahun Akademik :
	<select name="ta_id">
	<?php
		$sql_ta= "SELECT * FROM ta";
		$res_ta= $conn->query($sql_ta);
		while($dat_ta= $res_ta->fetch_assoc()){
			echo"<option value='".$dat_ta['id']."'>".$dat_ta['nama']."</option>";
		}
	?>
	</select>
	<br>Nilai <input type="text" name="nilai" id="nilai">
	<br>
	<input type="submit" name="submit_add" id="submit_add" value="SIMPAN">


</body>
</html>