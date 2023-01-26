<?php  

$host_name = "localhost";
$user_name = "root";
$password = "";

$db_name = "rentacardb";

$conn = mysqli_connect($host_name, $user_name, $password, $db_name);

if (!$conn) {
	echo "Failure: Could not connect to database!";
	exit();
}
?>