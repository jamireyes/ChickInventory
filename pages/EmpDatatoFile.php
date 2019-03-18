<?php
    $array = array();
    while($employee = mysqli_fetch_array($result)){
        array_push($array, $employee);
    }
    $jsonObject = json_encode($array);
    mysqli_close($conn);

    $inventoryData = "Emp_Table.json";
    $fh = fopen($inventoryData, 'w') or die ("Can't open file");
    fwrite($fh, $jsonObject);
    fclose($fh);
?>