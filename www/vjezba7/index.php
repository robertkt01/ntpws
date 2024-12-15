<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style>
		form {
			background-color: blue;
			color: white;
		}

		.rezultat {
			color: green;
		}
	</style>
</head>
<body>
	<form action="" method="post">
		<label for="ocjena_prvog_kolokvija">Upiši ocjenu prvog kolokvija *</label>
		<input type="number" name="ocjena_prvog_kolokvija" required>
		<label for="ocjena_drugog_kolokvija">Upiši ocjenu drugog kolokvija *</label>
		<input type="number" name="ocjena_drugog_kolokvija" required>
		<input type="submit">
	</form>	
</body>
</html>


<?php

if ($_POST) {
	$a = $_POST["ocjena_prvog_kolokvija"];
	$b = $_POST["ocjena_drugog_kolokvija"];

	if ($a < 2 || $b < 2) $rezultat = "Negativna ocjena";
	if ($a < 1 || $a > 5 || $b < 1 || $b > 5) $rezultat = "Ocjena je manja od 1 ili veća od 5";

	$avg = ($a + $b) / 2;
	if (!isset($rezultat)) $rezultat = "Prosjek = " . $avg . "<br>Konačna ocjena = " . round($avg);

	echo '<h1 class="rezultat">' . $rezultat . '</h1>';
}

?>
