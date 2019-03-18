<?php

	require 'connection.php';

	$id = $_POST["Ingredient_ID"];
	$sql = "DELETE FROM Ingredient WHERE Ingredient_ID = $id";
	
	if($conn->query($sql) == TRUE){
		header("Location: http://localhost:85/ChickInventory/pages/inventory.php", true, 301);
		exit();
	} else{
		echo "Error: " . $conn->error;
	}
	
?>