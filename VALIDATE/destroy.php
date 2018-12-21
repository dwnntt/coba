<?php
session_start()
?>
<!DOCTYPE html>
<html>
<head>
	<title>DESTROY</title>
</head>
<body>
<h1> INDEX </h1>
<a href="index.php">INDEX</a> | <a href="home.php">HOME</a> | <a href="destroy.php">DESTROY</a>
<?php
// $_SESSION['nama'] = "Suci Dewanti";
// echo $_SESSION['nama'];
session_destroy();
?>

</body>
</html>