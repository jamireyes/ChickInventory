<?php
    
    require 'connection.php';
    
    $array = json_decode($_POST['orderArr']);
    $array2 = json_decode($_POST['newDataJ']);

    $STquery = "INSERT INTO Sales_Transaction (Emp_ID, Order_Status, Date_Time, Total_Amount) VALUES ('2000', '$array2[0]', NOW(), '$array2[1]')";
    
    if($conn->query($STquery) == TRUE) {
    } else {
        echo "Error: " . $conn->error;
    }

    foreach($array as $value){
        
        $SDquery = "INSERT INTO Sales_Detail (Sales_No, Product_ID, Quantity) VALUES (LAST_INSERT_ID(), '$value', '1')";
        if ( $conn->query($SDquery) == TRUE ) {
        } else {
            echo "Error: " . $conn->error;
        }
        
    }

    header("Location: http://localhost:85/ChickInventory/pages/index.php", true, 301);
    exit();
    
?>