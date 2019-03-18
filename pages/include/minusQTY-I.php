<?php

	require 'connection.php';

	$I_ID = $_POST["Ingredient_ID"];
	$minusQTY = $_POST["minusQTY-I"];

	$query = " UPDATE Ingredient SET Quantity = Quantity - '$minusQTY' WHERE Ingredient_ID = '$I_ID' ";

	if ($conn->query($query) == TRUE) {
		header("Location: http://localhost:85/ChickInventory/pages/inventory.php", true, 301);
		exit();
	} else {
		echo "Error: " . $conn->error;
	}
	


?>