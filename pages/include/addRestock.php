<?php

	require 'connection.php';

	$pro_Code = $_POST["Product_Code"];
	$newRestock = $_POST["addRestock"];
	$restockNo = $_POST["addRestockNo"];

	$update_query = " UPDATE product_item SET Quantity = Quantity + '$newRestock' WHERE product_code = '$pro_Code' ";

	if($conn->query($update_query) == TRUE){
		$insert_query = "INSERT INTO restock_order (Restock_No) VALUES ('$restockNo')";
		if($conn->query($insert_query) == TRUE){
			header("Location: http://localhost:85/ChickInventory/pages/inventory.php", true, 301);
			exit();
		}else{
			echo "Error: " . $conn->error;
		}
	}else{
		echo "Error: " . $conn->error;
	}


?>