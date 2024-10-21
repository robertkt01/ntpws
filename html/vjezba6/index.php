<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<form action="" method="post">
		<label for="broj1">Upiši prvi broj*</label>
		<input type="number" name="broj1" required>
		<label for="broj2" required>Upiši drugi broj*</label>
		<input type="number" name="broj2" required>
		<label for="add" required>+</label>
		<input type="radio" value="add" name="operacija" checked>
		<label for="sub" required>-</label>
		<input type="radio" value="sub" name="operacija">
		<label for="multiply" required>*</label>
		<input type="radio" value="multiply" name="operacija">
		<label for="div" required>/</label>
		<input type="radio" value="div" name="operacija">
		<input type="submit">
	</form>	
</body>
</html>

<?php

if ($_POST) {
	$a = $_POST["broj1"];
	$b = $_POST["broj2"];
	$oper = $_POST["operacija"];

	switch ($oper) {
		case "add":
			$result = $a + $b;
			break;
		case "sub":
			$result = $a - $b;
			break;
		case "multiply":
			$result = $a * $b;
			break;
		case "div":
			$result = $a / $b;
			break;
		default:
			$result = "Kriva operacija";
			break;
	}

	echo "Rezultat = " . $result;
}

?>
