<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<form method="post">
		<input type="text" name="search_text">
		<input type="submit">
	</form>	
</body>
</html>
<?php
if ($_POST) {
	$unos = $_POST["search_text"];
	$con=mysqli_connect("172.18.0.2", "root", "root_password", "ntpws2", 3306);
	$query="SELECT * FROM `users` WHERE first_name='" . $unos . "' OR last_name='" . $unos . "'";
	$result = mysqli_query($con,$query);
	while($row = mysqli_fetch_array($result)) {
		echo "<p>";
		echo $row['first_name'] . " " . $row['last_name'];
		echo "</p>";
	}
	mysqli_close($con);
}
?>

