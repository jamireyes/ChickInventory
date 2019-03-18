<?php
    $array = array();
    while($ingredient = mysqli_fetch_array($result)){
        array_push($array, $ingredient);
    }
    $jsonObject = json_encode($array);

    $data = "Ingredient_data.json";
    $fh = fopen($data, 'w') or die ("Can't open file");
    fwrite($fh, $jsonObject);
    fclose($fh);
?>