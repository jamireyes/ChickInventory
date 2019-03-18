<?php

	require 'connection.php';

	$pro_ID = $_POST["Product_ID"];
	$minusStock = $_POST["minusStock"];

	$query = " UPDATE product_item SET Quantity = Quantity - '$minusStock' WHERE Product_ID = '$pro_ID' ";

	if (!empty($pro_Code) || !empty($minusStock)) {
		if ($conn->query($query) == TRUE) {
			header("Location: http://localhost:85/ChickInventory/pages/inventory.php", true, 301);
			exit();
		} else {
			echo "Error: " . $conn->error;
		}
	}
	


?>