<?php
// Q1) Sorting of array
//compare each element with adjacent element and swap if larger
// O(n^2) in best and worst- selection sort
$arr = [3,5,1,7,2];
for($i=0; $i<count($arr);$i++){
    for($j=$i+1;$j<count($arr);$j++){
        if($arr[$i] > $arr[$j]){
            $temp = $arr[$i];
            $arr[$i] = $arr[$j];
            $arr[$j] = $temp;
        }
    }
}
print_r($arr);