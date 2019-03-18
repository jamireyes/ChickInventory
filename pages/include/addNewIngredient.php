<?php

	require 'connection.php';

	$I_Code = $_POST["addNewICode"];
	$I_Name = $_POST["addNewIName"];
	$I_Unit = $_POST["addNewIUnit"];
	$I_CPrice = $_POST["addNewICPrice"];

	$query = "INSERT INTO Ingredient(Ingredient_Code, Ingredient_Name, Quantity, Unit, Cost_Price) VALUES ('$I_Code', '$I_Name', '0', '$I_Unit', '$I_CPrice')";

	if($conn->query($query) == TRUE){
		header("Location: http://localhost:85/ChickInventory/pages/inventory.php", true, 301);
		exit();
	} else{
		echo "Error: " . $conn->error;
	}

?>