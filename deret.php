<!DOCTYPE html>
<html>
<head>
	<title>Deret Bilangan Segitiga</title>
</head>
<body>
<form action="deret.php" method="POST">
<input type="text" name="bilangan">
<input type="submit" name="submit">
<br>
<?php
if (isset($_POST["bilangan"]));
	{
	$bil=$_POST["bilangan"];
	$un=0.5*$bil*($bil+1);
	$sn=1/6*$bil*($bil+1)*($bil+2);
	for($a=$un;$a>=0;$a--){
		for($i=1; $i<=$a; $i++){
			echo "&nbsp ";

		}
		for($a1=$un;$a1>$a;$a1--){
			echo"&nbsp *";
		}
	echo"<br>";
	}
	}
?>

</body>
</html>