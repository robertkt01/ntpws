<?php
$cars = array("Audi", "BMW", "Renault", "Citroen");
echo "<p>Lista vozila:</p>";
echo "<form action='' method='post'>";
	foreach ($cars as $car) {
		echo "<label for='" . $car . "''>" . $car . "</label>";
		echo "<input type='radio' value='" . $car . "' name='car'>";
		echo "</br>";
	}
echo "<input type='submit'>";
echo "</form>";

if ($_POST) {
	$car = $_POST["car"];
	echo "Označili ste " . $car;
}

?>
