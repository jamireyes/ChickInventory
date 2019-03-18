<?php

	require 'connection.php';

    $I_ID = $_POST["Ingredient_ID"];
	$I_Code = $_POST["editICode"];
	$I_Name = $_POST["editIName"];
	$I_Unit = $_POST["editIUnit"];
	$I_Price = $_POST["editIPrice"];

	
	$sql = "UPDATE Ingredient SET Ingredient_Code = '$I_Code', Ingredient_Name = '$I_Name', Unit = '$I_Unit', Cost_Price = '$I_Price' WHERE Ingredient_ID = '$I_ID'";

	if($conn->query($sql) == TRUE){
		header("Location: http://localhost:85/ChickInventory/pages/inventory.php", true, 301);
		exit();
	} else{
		echo "Error: " . $conn->error;
	}
	
?>