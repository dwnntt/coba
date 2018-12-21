<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "unp_akademik";

//Create connection
$conn= new mysqli($servername,$username,$password,$dbname);

//check connection
if ($conn->connect_error){
	die("Connection Failed: ". $conn->connection_error);
	}
/*else
	echo "Connection Success";*/
?>