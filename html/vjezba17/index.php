<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php
	$con=mysqli_connect("172.18.0.2", "root", "root_password", "ntpws2", 3306);
	$query="SELECT users.first_name, users.last_name, countries.country
		FROM users
		INNER JOIN `countries`
		ON users.country_id = countries.id";
	$result = mysqli_query($con,$query);
	while($row = mysqli_fetch_array($result)) {
		echo "<p>";
		echo $row['first_name'] . " " . $row['last_name'] . " (" . $row['country'] .")";
		echo "</p>";
	}
	mysqli_close($con);
	?>
</body>
</html>
