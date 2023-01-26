<?php  
if (isset($_POST['Username']) && isset($_POST['name']) && isset($_POST['mail'])) {
	include 'manage1.php';

	
	$Username = trim($_POST['Username']);
	$name = trim($_POST['name']);
	$mail = trim($_POST['mail']);

	if (empty($Username) || empty($name) || empty($mail)) {
		echo "Please complete all form fields!";
	} else {
		$stmt = $conn->prepare("INSERT INTO clients(Username, name, mail) VALUES (?, ?, ?)");
		$stmt->bind_param("sss", $Username, $name, $mail);
		$result = $stmt->execute();

		if ($result) {
			echo '<script>alert("Newsletter inserted successfully!")</script>';
		} else {
			echo '<script>alert("Your newsletter could not be inserted due to an error!")</script>';
		}
		$stmt->close();
	}

	mysqli_close($conn);

} else {
	echo "Please complete all form fields!";
}

echo "</br><a href='YpoxrewtikhErg.html'>Back</a>"
?>