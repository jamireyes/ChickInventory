<?php

	require 'connection.php';

	$pro_ID = $_POST["Product_ID"];
	$pro_Code = $_POST["editPCode"];
	$pro_Name = $_POST["editPName"];
	$pro_Des = $_POST["editDescription"];
	$pro_Unit = $_POST["editUnit"];
	$pro_SPrice = $_POST["editPrice"];
	$pro_Category = $_POST["editCategory"];

	
	$sql = "UPDATE product_item SET Product_Code = '$pro_Code', Product_Name = '$pro_Name', Product_Description = '$pro_Des', Unit = '$pro_Unit', Selling_Price = '$pro_SPrice', Category = '$pro_Category' WHERE Product_ID = '$pro_ID'";

	if($conn->query($sql) == TRUE){
		header("Location: http://localhost:85/ChickInventory/pages/inventory.php", true, 301);
		exit();
	} else{
		echo "Error: " . $conn->error;
	}
	
?>