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
		ON users.country_id = countries.id
		WHERE users.id = " . $_GET['id'];
	$user = mysqli_query($con,$query);
	$user = mysqli_fetch_assoc($user);
	$query = "SELECT * FROM countries";
	$countries = mysqli_query($con,$query);
	?>
	<form action="#" method="post">
		<label for="first_name">First name</label>
		<input type="text" name="first_name" value="<?php echo $user['first_name'] ?>">
		<label for="last_name">Last name</label>
		<input type="text" name="last_name" value="<?php echo $user['last_name'] ?>">
		<label for="country">Country</label>
		<select name="country">
		<?php
		while($row = mysqli_fetch_array($countries)) {
			echo "<option value='";
			echo $row['id'];
			echo "'>" . $row['country'] . "</option>";
		}
		?>
		</select>
		<input type="submit">
	</form>
	<?php
	mysqli_close($con);
	?>
</body>
</html>
<?php
if ($_POST) {
	$con=mysqli_connect("172.18.0.2", "root", "root_password", "ntpws2", 3306);
	$query="UPDATE users SET first_name = '" . $_POST['first_name'] .
		"', last_name = '" . $_POST['last_name'] .
		"', country_id = '" . $_POST['country'] . "'
		WHERE users.id = " . $_GET['id'];
	$user = mysqli_query($con,$query);
	mysqli_close($con);
	echo "User updated";
}
?>
