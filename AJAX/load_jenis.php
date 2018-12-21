<?php
$jenis= $_POST['jenis'];
switch ($jenis){
	case 'sayur':
		echo "<select name='sayur' id='sayur'>
				<option>Pilih Sayuran</option>
				<option>Kangkung</option>
				<option>Kacang Panjang</option>
				<option>Selada</option>
			</select>";
	break;
	case 'buah':
		echo "<select name='buah' id='buah'>
				<option>Pilih Sayuran</option>
				<option>Manggis</option>
				<option>Alpukat</option>
				<option>Durian</option>
			</select>";
	break;
	case 'lauk':
		echo "<select name='lauk' id='lauk'>
				<option>Steak</option>
				<option>Pizza</option>
				<option>Burger</option>
				<option>Cumi Asam Manis</option>
			</select>";
	break;
	default:
		echo "Jenis Belum Dipilih";
		break;
}
?>