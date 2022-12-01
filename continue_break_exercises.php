<?php
$fruits = array("apple"=>10, "banana"=>20, "grapes"=>50, "mango"=>15, "melon"=>0, "orange"=>5, "pineapple"=>0, "strawberry"=>30, "watermelon"=>10);

foreach($fruits as $key=>$value) {
    if($value != 0) {
        echo "$key: $value <br/>";
    }
}

echo "<br/>";
$total = 0;
foreach($fruits as $key=>$value){
    $total = $total + $value;
    if($total > 100) {
        break;
    }else {
        echo "$key: $value <br/>";
    }
}

echo "<br/>";
for($i = 1; $i <= 5; $i++){
    for($j = 1; $j <= 5; $j++){
        if($i === $j) {
            continue;
        }
        echo "$i-$j, ";
    }
}

?>