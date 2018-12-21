<html>
<head>
	<title>Membuat Kalkulator Sederhana Dengan PHP</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
		
	<?php 
		if(isset($_POST['operasi'])){
			$bil1 = $_POST['bil1'];
			$bil2 = $_POST['bil2'];
			$operasi = $_POST['operasi'];
			switch ($operasi) {
				case '+':
					$hasil = $bil1+$bil2;
				break;
				case '-':
					$hasil = $bil1-$bil2;
				break;
				case 'X':
					$hasil = $bil1*$bil2;
				break;
				case ':':
					$hasil = $bil1/$bil2;
				break;			
			}
		}
		?>
	<div class="kalkulator">
		<h2 class="judul">KALKULATOR</h2>
		<form method="post" action="latihan1.php">			
			<input type="text" name="bil1" value="<?php if (isset($_POST['operasi'])) echo "$bil1" ?>" placeholder="Masukkan Bilangan Pertama">
			<input type="text" name="bil2" value="<?php if (isset($_POST['operasi'])) echo "$bil2" ?> " placeholder="Masukkan Bilangan Kedua">
			<?php if(isset($_POST['operasi'])){ ?>
			<input type="text" value="<?php echo $hasil; ?>"name="hitung">
			<?php }else{ ?>
			<input type="text" value="0" class="bil">
		<?php } ?>
		</br>
		<h2> Option</h2>
		<input type="submit" name="operasi" value="+">
		<input type="submit" name="operasi" value="-">
		<input type="submit" name="operasi" value="X">
		<input type="submit" name="operasi" value=":">
														
		</form>		
	</div>
</body>
</html>