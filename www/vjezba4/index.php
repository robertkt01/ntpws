<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<form action="" method="post">
		<label for="vrijednost1">Vrijednost 1</label>
		<input type="number" name="vrijednost1">
		<label for="vrijednost2">Vrijednost 2</label>
		<input type="number" name="vrijednost2">
		<input type="submit" name="" id="">
	</form>
</body>
</html>

<?php

if ($_POST) {
	$a = $_POST["vrijednost1"];
	$b = $_POST["vrijednost2"];

	$c = (3 * $a - $b)/2;

	echo "Rezultat = " . $c;
}

?>
