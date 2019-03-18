<?php
    $array = array();
    while($product_item = mysqli_fetch_array($result)){
        array_push($array, $product_item);
    }
    $jsonObject = json_encode($array);

    $inventoryData = "Inventory_data.json";
    $fh = fopen($inventoryData, 'w') or die ("Can't open file");
    fwrite($fh, $jsonObject);
    fclose($fh);
?>