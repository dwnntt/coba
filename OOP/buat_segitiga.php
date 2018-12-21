<?php
	include 'class_segitiga.php';
	$triangle = new segitiga;

	echo $triangle->setengah_segitiga(3);

	echo $triangle->setengah_segitiga(4);

	echo $triangle->setengah_segitiga();
	echo $triangle->setengah_segitiga(10);
?>