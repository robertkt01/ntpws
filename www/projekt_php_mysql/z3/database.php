<?php
	$db=mysqli_connect("host.docker.internal", "root", "tiger", "ntpws", 3306);
	// $query="SELECT users.id, users.first_name, users.last_name, countries.country
	// 	FROM users
	// 	INNER JOIN `countries`
	// 	ON users.country_id = countries.id";
	// $result = mysqli_query($con,$query);
	// while($row = mysqli_fetch_array($result)) {
	// 	echo "<p>";
	// 	echo $row['first_name'] . " " . $row['last_name'] . " (" . $row['country'] .")";
	// 	echo " <a href='edit.php?id=" . $row['id'] . "'>Edit</a>";
	// 	echo "</p>";
	// }
	// mysqli_close($con);
?>
