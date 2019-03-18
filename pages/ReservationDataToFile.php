<?php
    $array = array();
    while($res = mysqli_fetch_array($result)){
        array_push($array, $res);
    }
    $jsonObject = json_encode($array);

    $data = "reservation_data.json";
    $fh = fopen($data, 'w') or die ("Can't open file");
    fwrite($fh, $jsonObject);
    fclose($fh);
?>