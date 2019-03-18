<?php

	require 'connection.php';

	$LName = $_POST["addLName"];
	$FName = $_POST["addFName"];
	$MI = $_POST["addMI"];
	$CNum = $_POST["addCNum"];
	$Pos = $_POST["addPos"];
	$DOB = $_POST["addDOB"];
	$Gender = $_POST["addGender"];
	$Address = $_POST["addAddress"];

	$sql = "INSERT INTO employee(Lname, Fname, MI, Contact_No, Position, DateOfBirth, Gender, CurrAddress) VALUES ('$LName', '$FName', '$MI', '$CNum', '$Pos', '$DOB', '$Gender', '$Address')";

	if($conn->query($sql) == TRUE){
		header("Location: http://localhost:85/ChickInventory/pages/employeeInfo.php", true, 301);
		exit();
	} else{
		echo "Error: " . $conn->error;
	}

?>