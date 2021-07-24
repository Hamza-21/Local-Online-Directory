<!DOCTYPE html>
<html>
<head>
	<title>test</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h1>test</h1>
	<img src="images/desert.jpg" width="500" height="500" alt="Notfound">
	<table>
	<tr>
		<th>Address</th>
		<th>Contact Number</th>
	</tr>

	<?php
	$conn = mysqli_connect("localhost", "root", "", "info_for_directory");
	if ($conn -> connect_error) {
		die("Connection Failed!".$conn -> connect_error);
	}

	$sql = "SELECT address, contact from hos_clinic";
	$result = $conn -> query($sql);

	if ($result -> num_rows > 0) {
		while ($row = $result -> fetch_assoc()) {
			echo "<tr><td>".$row["address"]."</td><td>".$row["contact"]."</td></tr>";
		}
	}
	else {
		echo "0 result";
	}

	$conn -> close();

	?>
</table>

</body>
</html>