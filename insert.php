<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
</head>
<body>

<?php 

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirm_pass = $_POST['confirm_pass'];


if (!empty($username) || !empty($email) || !empty($password) || !empty($confirm_pass)) {

	if ($_POST['password'] != $_POST['confirm_pass']) {
		die('Passwords do not match!');
	} else {
	// Access Database
		$host = "localhost";
		$dbUsername = "root";
		$dbPassword = "";
		$dbname = "users_registry";
		
	// Connection to Database
		$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

		if (mysqli_connect_error()) {
			die('Connection Error('.mysqli_connect_errno().')'.mysqli_connect_error());
		} else {
			$SELECT = "SELECT username From register Where username = ? Limit 1";
			$INSERT = "INSERT Into register (username, email, password, confirm_pass) values(?, ?, ?, ?)";

			// Prepared Statements
			$stmt = $conn->prepare($SELECT);
			$stmt->bind_param("s", $username);
			$stmt->execute();

			$stmt->bind_result($username);
			$stmt->store_result();
			$stmt->store_result();
			$stmt->fetch();

			$rnum = $stmt->num_rows;

			if ($rnum == 0) {
				$stmt->close();

				$stmt = $conn->prepare($INSERT);
				$stmt->bind_param("ssss", $username, $email, $password, $confirm_pass);
				$stmt->execute();
				echo "Account created successfully<br>";
				echo "<a href='login.php'>Click here to login</a>";
			} else {
				echo "User with this Username Already exists. Please select a different username :)";
			}
			$stmt->close();
			$conn->close();
		}
	}

} else {
	echo "Please fill the required fields.";
	die();
}

?>

</body>
</html>