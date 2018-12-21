<?php
include './koneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Mahasiswa</title>
</head>
<body>
<table width="100%" border="1">
	<thead>
		<tr>
			<th width="5%">No. </th>
			<th width="15%">NPM </th>
			<th width="25%">Nama </th>
			<th>Alamat</th>
		</tr>
	</thead>
</tbody>
<center><h2> Data Mahasiswa </h2><br>
<?php include 'menu.php'; ?></center><br>
<?php
	$sql= "SELECT * FROM mhs";
	$res= $conn->query($sql);
	//$jml= $res->num_rows;
	if($res->num_rows > 0){
		$i=0;
		while($dat = $res->fetch_assoc()){
			$i++;
			echo "<tr>
				<td>$i<br></td>
				<td><a href='mhs_detil.php?npm=".$dat["npm"]."'>".$dat["npm"]."</a></td>
				<td>".$dat["nama"]."</td>
				<td>".$dat["alamat"]."</td>
			</tr>";
		}
	}
?>
</table>

</body>
</html>