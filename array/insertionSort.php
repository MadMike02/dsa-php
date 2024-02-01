<?php
$arr = [3,5,1,7,2];
// Time Complexity: O(N^2) 

for($i=1;$i<count($arr);$i++){
    $key = $arr[$i];

    $j = $i-1;
    while($j >= 0 && $key < $arr[$j]){
        $arr[$j+1] = $arr[$j];
        $j--;
    }
    $arr[$j+1] = $key;
}

print_r($arr);