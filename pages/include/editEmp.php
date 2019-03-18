<?php

	require 'connection.php';

	$id = $_POST["Emp_ID"];
	$LName = $_POST["addLName"];
	$FName = $_POST["addFName"];
	$MI = $_POST["addMI"];
	$CNum = $_POST["addCNum"];
	$Pos = $_POST["addPos"];
	$DOB = $_POST["addDOB"];
	$Gender = $_POST["addGender"];
	$Address = $_POST["addAddress"];

	
	$sql = "UPDATE employee SET Lname = '$LName', Fname = '$FName', MI = '$MI', Contact_No = '$CNum', Position = '$Pos', DateOfBirth = '$DOB', Gender = '$Gender', CurrAddress = '$Address' WHERE Emp_ID = '$id'";

	if($conn->query($sql) == TRUE){
		header("Location: http://localhost:85/ChickInventory/pages/employeeInfo.php", true, 301);
		exit();
	} else{
		echo "Error: " . $conn->error;
	}
	
?>