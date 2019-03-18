<?php

	require 'connection.php';

    $CName = $_POST['CName'];
    $RDate = $_POST['reservedDate'];
    $RTime = $_POST['reservedTime'];
    $TNum = $_POST['tableNo'];
    $PNum = $_POST['NoParty'];

	$sql = "INSERT INTO Reservation(Table_No, Customer_Name, No_in_Party, Date_Time, Emp_ID) VALUES ('$TNum', '$CName', '$PNum', '$RDate $RTime', '2000')";

	if($conn->query($sql) == TRUE){
		header("Location: http://localhost:85/ChickInventory/pages/table.php", true, 301);
		exit();
	} else{
		echo "Error: " . $conn->error;
	}

?>