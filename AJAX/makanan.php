<!DOCTYPE html>
<html>
<head>
	<title>Ajax</title>
	<script type="text/javascript" src="jquery-3.2.1.min.js"></script>
</head>
<body>
<h2>Ajax Menggunakan jQuery</h2>
<br>Pilih jenis Makanan
<br>
<select name="jenis" id="jenis">
	<option>Pilih</option>
	<option value="buah">Buah</option>
	<option value="sayur">Sayur</option>
	<option value="lauk">Lauk</option>
</select>
<br><br>
<div id="mkn"></div>
</body>

</html>
<script type="text/javascript">
	$(document).ready(function(){
		$('#jenis').change(function(){
			ambil_makanan();
		})

	function ambil_makanan(){
		var jenis = $('#jenis').val();
		$.ajax({
			type : "POST",
			url  : "load_jenis.php",
			data : 'jenis='+jenis,
			success : function(res){
						$('#mkn').html(res);
			}
		})
	}
	})
</script>