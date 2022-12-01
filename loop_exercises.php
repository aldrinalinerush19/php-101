<?php
for($i = 1; $i < 11; $i++) {
    $total = $i*3;
    echo "$total, ";
}
echo "<br/>";
for($i = 1; $i < 4; $i++) {
    for($j = 1; $j < 6; $j++) {
        echo "$i - $j, ";
    }
}

$fruits = array("apple" => 10, "banana" => 20, "grapes" => 50, "mango" => 15, "melon" => 0, "orange" =>5, "pineapple" => 0, "strawberry" => 30);
echo "<br/>";
foreach($fruits as $i => $j) {
    echo "$i: " . "$j <br/>";
}
?>