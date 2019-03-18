<?php

	require 'connection.php';

	$pro_Code = $_POST["addNewPCode"];	
	$pro_Name = $_POST["addNewPName"];
	$pro_Des = $_POST["addNewDescription"];
	$pro_Category = $_POST["addNewCategory"];
	$pro_Unit = $_POST["addNewUnit"];
	$pro_SPrice = $_POST["addNewSPrice"];
	

	$query = "INSERT INTO product_item (Product_Code, Product_Name, Product_Description, Category, Unit, Selling_Price) VALUES ('$pro_Code', '$pro_Name', '$pro_Des', '$pro_Category','$pro_Unit', '$pro_SPrice')";

	if($conn->query($query) == TRUE){
		header("Location: http://localhost:85/ChickInventory/pages/inventory.php", true, 301);
		exit();
	} else{
		echo "Error: " . $conn->error;
	}

?>