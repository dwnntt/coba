<html>
<head>
    <title></title>
</head>
<body>
<?php
echo "Perulangan tanpa break  "."<br/>";
for ($a = 1; $a <= 10; $a++) {
	 echo $a." ";
    
}
echo "<br><br>Perulangan dengan break  "."<br/>";
for ($a = 1; $a <= 10; $a++) {
	 echo $a." ";
    if($a==4)
    	break;
}
echo "<br>Looping Berakhir";
?>
</body>
</html>