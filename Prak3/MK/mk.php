<?php
include './koneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Mata Kuliah</title>
</head>
<body>
<table width="100%" border="1">
	<thead>
		<tr>
			<th width="5%">No. </th>
			<th width="25%">Kode</th>
			<th width="25%">Nama</th>
		</tr>
	</thead>
</tbody>
<center><h2> Data Matakuliah </h2><br>
<?php include 'menu.php'; ?></center><br>
<?php
	$sql= "SELECT * FROM mk";
	$res= $conn->query($sql);
	//$jml= $res->num_rows;
	if($res->num_rows > 0){
		$i=0;
		while($dat = $res->fetch_assoc()){
			$i++;
			echo "<tr>
				<td>$i<br></td>
				<td><a href='mk_detil.php?kode=".$dat["kode"]."'>".$dat["kode"]."</a></td>
				<td>".$dat["nama"]."</td>
			</tr>";
		}
	}
?>
</table>

</body>
</html>