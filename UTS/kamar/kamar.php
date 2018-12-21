<?php
include '../koneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Kamar</title>
</head>
<body>
<table width="100%" border="1">
	<thead>
		<tr>
			<th width="5%">No. </th>
			<th width="25%">Kode Kamar</th>
			<th width="25%">Nama Kamar</th>
		</tr>
	</thead>
</tbody>
<center><h2> Data kamar </h2><br>
<?php include 'menu.php'; ?></center><br>
<?php
	$sql= "SELECT * FROM kamar";
	$res= $conn->query($sql);
	//$jml= $res->num_rows;
	if($res->num_rows > 0){
		$i=0;
		while($dat = $res->fetch_assoc()){
			$i++;
			echo "<tr>
				<td>$i<br></td>
				<td><a href='kamar_detil.php?id=".$dat["id"]."'>".$dat["id"]."</a></td>
				<td>".$dat["nama"]."</td>
			</tr>";
		}
	}
?>
</table>

</body>
</html>