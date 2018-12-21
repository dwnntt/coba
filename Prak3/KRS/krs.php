<?php
include './koneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>KRS</title>
</head>
<body>
<table width="100%" border="1">
	<thead>
		<tr>
			<th width="5%">No. </th>
			<th width="20%">NPM </th>
			<th width="20%">Nama Mahasiswa </th>
			<th width="20%">Matakuliah </th>
			<th width="15%">Semester</th>
			<th width="10%">Tahun Ajaran</th>
			<th>Nilai</th>
		</tr>
	</thead>
</tbody>
<center><h2> Data Kartu Rencana Study </h2><br>
<?php include 'menu.php'; ?></center><br>
<?php
	$sql= "SELECT K.id as id, M.npm as npm, M.nama as m_nama, MK.nama as mk_nama, K.sem as
			sem, T.nama as t_nama, K.nilai as k_nilai
			FROM krs K
			JOIN mhs M ON K.mhs_npm=M.npm
			JOIN mk MK ON K.mk_kode= MK.Kode
			JOIN ta T ON K.ta_id= T.id";
	$res= $conn->query($sql);
	//$jml= $res->num_rows;
	if($res->num_rows > 0){
		$i=0;
		while($dat = $res->fetch_assoc()){
			$i++;
			echo "<tr>
				<td>$i<br></td>
				<td><a href='krs_detil.php?id=".$dat["id"]."'>".$dat["npm"]."</a></td>
				<td>".$dat["m_nama"]."</td>
				<td>".$dat["mk_nama"]."</td>
				<td>".$dat["sem"]."</td>
				<td>".$dat["t_nama"]."</td>
				<td>".$dat["k_nilai"]."</td>
			</tr>";
		}
	}
?>
</table>

</body>
</html>