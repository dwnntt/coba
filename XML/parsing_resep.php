<?php
$file = "resep2.xml";
$res = simplexml_load_file($file);

echo "PARSING resep.xml";

echo "<br>".$res->Resep;

echo $res->judul;
echo "<br>Bahan";
foreach ($res->bahan as $bahan) {
	
	echo "<br>".$bahan;
	echo "&nbsp".$bahan['jumlah'];
	echo "&nbsp".$bahan['satuan'];
}
 echo "<br>";
echo "<br>Cara Membuat";
foreach ($res->Cara_membuat->langkah as $cara) {
	echo "<br>".$cara;
	
}

?>