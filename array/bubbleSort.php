<?php
//O(n) in best case and O(n^2) in worst - bubble sort
// compare pairs and swap if greater, after each iteration the greater element will be at the last index
$arr = [3,5,1,7,2];
for($i = 0;$i<count($arr);$i++){
    for($j=0;$j < count($arr) - $i -1; $j++){
        if($arr[$j+1] < $arr[$j]){
            $temp = $arr[$j+1];
            $arr[$j+1] = $arr[$j];
            $arr[$j] = $temp;
        }
    }
}

print_r($arr);