<?php

	require 'connection.php';

    $Emp_ID = $_POST['addEmpID'];
    $UName = $_POST['addUName'];
    $Pwd = $_POST['addPwd'];
    $Priv = $_POST['addPriv'];

	$sql = "INSERT INTO Account(Emp_ID, Username, Pwd, Privilege) VALUES ('$Emp_ID', '$UName', '$Pwd', '$Priv')";

	if($conn->query($sql) == TRUE){
		header("Location: http://localhost:85/ChickInventory/pages/account.php", true, 301);
		exit();
	} else{
		echo "Error: " . $conn->error;
	}

?>