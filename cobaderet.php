<!DOCTYPE html>
<html>
<head>
	<title>Deret Bilangan Segitiga</title>
</head>
<body>
<form action="cobaderet.php" method="POST">
<input type="text" name="bilangan">
<input type="submit" name="submit">
<br>
<?php
if (isset($_POST["bilangan"]));
	{
	$bil=$_POST["bilangan"];
for( $a=$bil;$a>0;$a--){

for($a1=$bil;$a1>$a;$a1--){
echo"*";
}

echo"<br>";
}
}



?>
</form>
</body></html>