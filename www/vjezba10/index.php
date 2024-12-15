<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<form action="" method="post">
		<label for="ulazni_niz">Ulazni niz</label>
		<input type="text" name="ulazni_niz" required>
		<input type="submit">
	</form>	
</body>
</html>


<?php

if ($_POST) {
	$ulazni_niz = $_POST["ulazni_niz"];
	$word_count = str_word_count($ulazni_niz);

	echo '<h1>Ulazni niz ' . $ulazni_niz . ' sadrži ' . $word_count . ' riječi</h1>';
}

?>
