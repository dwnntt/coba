<?php
include '../koneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Penghuni</title>
</head>
<body>
<table width="100%" border="1">
	<thead>
		<tr>
			<th width="5%">No. </th>
			<th width="10%">Kode Penghuni</th>
			<th width="20%">Nama Penghuni</th>
			<th width="30%">Alamat Penghuni</th>
			<th width="15%">Kota Asal</th>
			<th width="20%">Kamar</th>
		</tr>
	</thead>
</tbody>
<center><h2> Data penghuni </h2><br>
<?php include 'menu.php'; ?></center><br>
<?php
	$sql= "SELECT P.id as id, P.nama as nama, P.alamat as alamat, A.nama as kota_nama, K.nama as kamar_nama
			FROM penghuni P
			JOIN kota A ON P.kota_id= A.id
			JOIN kamar K ON P.kamar_id= K.id ";
	$res= $conn->query($sql);
	//$jml= $res->num_rows;
	if($res->num_rows > 0){
		$i=0;
		while($dat = $res->fetch_assoc()){
			$i++;
			echo "<tr>
				<td>$i<br></td>
				<td><a href='penghuni_detil.php?id=".$dat["id"]."'>".$dat["id"]."</a></td>
				<td>".$dat["nama"]."</td>
				<td>".$dat["alamat"]."</td>
				<td>".$dat["kota_nama"]."</td>
				<td>".$dat["kamar_nama"]."</td>
			</tr>";
		}
	}
?>
</table>

</body>
</html>