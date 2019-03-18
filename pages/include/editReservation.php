<?php

	require 'connection.php';

    $Res_ID = $_POST['Res_ID'];
    $CName = $_POST['editCName'];
    $RDate = $_POST['editreservedDate'];
    $RTime = $_POST['editreservedTime'];
    $TNum = $_POST['edittableNo'];
    $PNum = $_POST['editNoParty'];

	$sql = "UPDATE Reservation SET Customer_Name = '$CName', Date_Time = '$RDate $RTime', Table_No = '$TNum', No_in_Party = '$PNum' WHERE Res_ID = '$Res_ID'";

	if($conn->query($sql) == TRUE){
		header("Location: http://localhost:85/ChickInventory/pages/table.php?$Res_ID", true, 301);
		exit();
	} else{
		echo "Error: " . $conn->error;
	}

?>