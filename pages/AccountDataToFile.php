<?php
    $array = array();
    while($acc = mysqli_fetch_array($result)){
        array_push($array, $acc);
    }
    $jsonObject = json_encode($array);

    $data = "Account_data.json";
    $fh = fopen($data, 'w') or die ("Can't open file");
    fwrite($fh, $jsonObject);
    fclose($fh);
?>