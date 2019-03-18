<?php

	require 'connection.php';

	$id = $_POST["delAcc_ID"];
	$sql = "DELETE FROM account WHERE Acc_ID = $id";
	
	if($conn->query($sql) == TRUE){
		header("Location: http://localhost:85/ChickInventory/pages/employeeInfo.php", true, 301);
		exit();
	} else{
		echo "Error: " . $conn->error;
	}
	
?>