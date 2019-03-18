<?php

	require 'connection.php';

	$I_ID = $_POST["Ingredient_ID"];
    $addQTY = $_POST["addQTY-I"];
    $I_RestockNo = $_POST["addRestockNo-I"];

	$update_query = " UPDATE Ingredient SET Quantity = Quantity + '$addQTY' WHERE Ingredient_ID = '$I_ID' ";

    if ($conn->query($update_query) == TRUE) {
        $insert_query = " INSERT INTO Restock_Detail(Ingredient_ID, Restock_No, Quantity) VALUES ('$I_ID', '$I_RestockNo', '$addQTY')";
        if ($conn->query($insert_query) == TRUE) {
            header("Location: http://localhost:85/ChickInventory/pages/inventory.php", true, 301);
		exit();
        } else {
            echo "Error: " . $conn->error;
        }
    } else {
        echo "Error: " . $conn->error;
    }
	


?>