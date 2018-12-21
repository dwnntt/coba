<?php
include './koneksi.php';

$id= $_GET['id'];

$sql= "SELECT * FROM krs WHERE id= '$id'";
$res= $conn->query($sql);
$dat= $res->fetch_assoc();

?>
<!DOCTYPE html>
<html>
<head>
	<title>KRS Detail</title>
</head>
<body>
<?php include 'menu.php'; ?>
<br><br>
<form name="myform" action="krs_proc.php" method="POST">
	Mahasiswa :
	<select name="mhs_npm">
	<?php
		$sql_mhs= "SELECT * FROM mhs ORDER BY nama";
		$res_mhs= $conn->query($sql_mhs);
		while($dat_mhs= $res_mhs->fetch_assoc()){
			if($dat_mhs['npm']==$dat['mhs_npm'])
				echo"<option value='".$dat_mhs['npm']."' selected='selected'>".$dat_mhs['nama']."</option>";
			else
				echo "<option value='".$dat_mhs['npm']."'>".$dat_mhs['nama']."</option>";
		}
	?>
	</select>
	<br><br>MataKuliah :
	<select name="mk_kode">
	<?php
		$sql_mk= "SELECT * FROM mk";
		$res_mk= $conn->query($sql_mk);
		while($dat_mk= $res_mk->fetch_assoc()){
			if($dat_mk['kode']==$dat['mk_kode'])
				echo"<option value='".$dat_mk['kode']."' selected='selected'>".$dat_mk['kode']."</option>";
			else
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
			if($dat_mk['id']==$dat['ta_id'])
				echo"<option value='".$dat_ta['id']."'>".$dat_ta['nama']."</option>";
			else
				echo"<option value='".$dat_ta['id']."'>".$dat_ta['nama']."</option>";
		}
	?>
	</select>
	<br>Nilai <input type="text" name="nilai" id="nilai" value="<?= $dat['nilai']?>">
	<br><br><input type="submit" name="submit_edit" id="submit_edit" value="SIMPAN">
	<input type="submit" name="submit_delete" id="submit_delete" value="HAPUS">
</form>
</body>
</html>