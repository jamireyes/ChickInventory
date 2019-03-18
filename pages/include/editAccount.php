<?php

	require 'connection.php';

    $Acc_ID = $_POST['editAcc_ID'];
    $Emp_ID = $_POST['editEmpID'];
    $UName = $_POST['editUName'];
    $Pwd = $_POST['editPwd'];
    $Priv = $_POST['editPriv'];

	$sql = " UPDATE Account SET Emp_ID = '$Emp_ID', Username = '$UName', Pwd = '$Pwd', Privilege = '$Priv' WHERE Acc_ID = '$Acc_ID' ";

	if($conn->query($sql) == TRUE){
		header("Location: http://localhost:85/ChickInventory/pages/account.php", true, 301);
		exit();
	} else{
		echo "Error: " . $conn->error;
	}

?>