<?php  
if (isset($_POST['Name']) && isset($_POST['phonenum']) && isset($_POST['email'])
 && isset($_POST['Subject']) && isset($_POST['message'])) {
	include 'manage1.php';

	$Name = trim($_POST['Name']);
	$phonenum = trim($_POST['phonenum']);
	$email = trim($_POST['email']);
    $Subject = trim($_POST['Subject']);
	$message = trim($_POST['message']);

	if (empty($Name) || empty($phonenum) || empty($email) || empty($Subject) || empty($message)) {
		echo "Please complete all form fields!";
	} else {
		$stmt = $conn->prepare("INSERT INTO messages(Name, phonenum, email, Subject, message) VALUES (?, ?, ? , ? , ? )");
		$stmt->bind_param("sisss", $Name, $phonenum, $email,$Subject,$message);
		$result = $stmt->execute();

		if ($result) {
			echo '<script>alert("New user inserted successfully!")</script>';
		} else {
			echo '<script>alert("Your message information could not be inserted due to an error!") </script>';
		}
		$stmt->close();
	}

	mysqli_close($conn);

} else {
	echo "Please complete all form fields!";
}

echo "</br><a href='contact.html'>Back</a>"
?>
