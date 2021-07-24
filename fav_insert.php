<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
	<title>fav_insert</title>
</head>
<body>

<?php 

	// Access DB

	$host = "localhost";
	$dbUsername = "root";
	$dbPassword = "";
	$dbname = "users_registry";

	// Connect to DB

	$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

if (isset($_SESSION['username'])) {
	
	if (mysqli_connect_error()) {
			die('Connection Error('.mysqli_connect_errno().')'.mysqli_connect_error());
		} else {
			if (isset($_POST['add_fav'])) {
				
				$favplaces = $_POST['place'];
				$favaddress = $_POST['address'];
				$favcontact = $_POST['contact'];
				$username = $_SESSION['username'];

				/* $check = "SELECT favourite1, favourite2, favourite3 
				FROM register WHERE favourite1 = '$favplaces' OR 
									favourite2 = '$favplaces' OR
									favourite3 = '$favplaces'";

				$checkresult = mysqli_query($conn, $check); 

				$check = "SELECT * FROM register WHERE favourite1 = '$favplaces' OR 
													   favourite2 = '$favplaces' OR
									                   favourite3 = '$favplaces' AND
									                   username = '$username'";
				$query = mysqli_query($conn, $check);

				if (mysqli_num_rows($query) > 0) {
					header('location: alrea_add.php');

				} else { */

					$fav1 = "UPDATE register 
					SET favourite5 = favourite4,
						favourite4 = favourite3,
						favourite3 = favourite2,
						favourite2 = favourite1,
						favourite1 = '$favplaces' 
					WHERE username = '$username'";
					$result1 = mysqli_query($conn, $fav1);

					$fav2 = "UPDATE register 
					SET address5 = address4,
						address4 = address3,
						address3 = address2,
						address2 = address1,
						address1 = '$favaddress' 
					WHERE username = '$username'";
					$result2 = mysqli_query($conn, $fav2);

					$fav3 = "UPDATE register 
					SET contact5 = contact4,
						contact4 = contact3,
						contact3 = contact2,
						contact2 = contact1,
						contact1 = '$favcontact' 
					WHERE username = '$username'";
					$result3 = mysqli_query($conn, $fav3);

						if (($result1) && ($result2) && ($result3)) {
							header('location: alrea_add.php');
						} else {
							echo "Please try again";
						} 	
					
				} else {
				echo "Some error occurred";
				} 	 
			} 
		} else {
		header('location: login.php');

		}
?>

</body>
</html>