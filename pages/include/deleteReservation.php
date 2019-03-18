<?php

	require 'connection.php';

	$id = $_POST["Res_ID-del"];
	$sql = "DELETE FROM Reservation WHERE Res_ID = $id";
	
	if($conn->query($sql) == TRUE){
		header("Location: http://localhost:85/ChickInventory/pages/table.php", true, 301);
		exit();
	} else{
		echo "Error: " . $conn->error;
	}
	
?>