<?php
$file = "biografi2.xml";
$bio = simplexml_load_file($file);

echo "PARSING biografi.xml";

echo "<br>".$bio->hobi;

foreach($bio->biodata as $biodata){
	echo "<br>BIODATA";
	echo "<br>".$biodata->nama;
	echo "<br>".$biodata->alamat;
	echo "<br>".$biodata->kota;
	echo "<br>".$biodata->pendidikan->sd;
	echo "<br>".$biodata->pendidikan->smp;
	echo "<br>".$biodata->pendidikan->sma;
	echo "<br>".$biodata->hobi;
	echo "<br>";
}
?>