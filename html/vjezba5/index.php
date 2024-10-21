<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<form action="" method="post">
		<label for="broj">Upiši jedan broj od 1 do 10</label>
		<input type="number" name="broj">
		<input type="submit">
	</form>
</body>
</html>

<?php

if ($_POST) {
	$random_num = rand(1, 9);
	if ($_POST["broj"] == $random_num)
		echo "Pogodak! Zamišljeni broj je " . $random_num;
	else
		echo "Krivo, probaj ponovo! Zamišljeni broj je " . $random_num;
}

?>
