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
		<input type="number" required name="broj1" required>
		<label for="broj2">Upiši drugi broj*</label>
		<input type="number" required name="broj2" required>
		<label for="add">+</label>
		<input type="radio" required value="add" name="operacija" checked>
		<label for="sub">-</label>
		<input type="radio" required value="sub" name="operacija">
		<label for="multiply">*</label>
		<input type="radio" required value="multiply" name="operacija">
		<label for="div">/</label>
		<input type="radio" required value="div" name="operacija">
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
