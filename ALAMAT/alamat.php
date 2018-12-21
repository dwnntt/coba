<?php
include "koneksi.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>AJAX Alamat</title>
	<script type="text/javascript" src="jquery-3.2.1.min.js"></script>
</head>
<body>
<h3>Provinsi</h3>
<select name="propinsi" id="propinsi">
	<?php
		$sql = "SELECT * FROM propinsi ORDER BY nama";
		$res = $conn->query($sql);
		if ($res->num_rows > 0 ){
			while($dat = $res ->fetch_assoc()){
				echo "<option value='".$dat['id']."'>".$dat['nama']."</option>";
			}
		}
	?>
</select>
<h3>Kota/Kabupaten</h3>
<select name="kab" id="kab">
</select>
<h3>Kecamatan</h3>
<select name="kec" id="kec">
</select>
</body>
</html>
<script type="text/javascript">
	alert('holla');
	$(document).ready(function(){
		$('#propinsi').change(function(){
			load_kab();
		})

	function load_kab(){
		var propinsi_id = $('#propinsi').val();
		$.ajax({
			type : "POST",
			url  : "load_kab.php",
			data : 'propinsi_id='+propinsi_id,
			success : function(res){
						$('#kab').html(res);
			}
		})
	}
	})

$(document).ready(function(){
		$('#kab').change(function(){
			load_kec();
		})

	function load_kec(){
		var kabupaten_id = $('#kab').val();
		$.ajax({
			type : "POST",
			url  : "load_kec.php",
			data : 'kabupaten_id='+kabupaten_id,
			success : function(res){
						$('#kec').html(res);
			}
		})
	}
	})


</script>