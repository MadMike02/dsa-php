<?php
$search = 7;

//for unsorted array
// O(n)
// $arr = [5,2,1,10,7,4];
// for ($i = 0; $i < count($arr); $i++) {
//     if ($arr[$i] === $search) {
//         echo "element found at -------".$i;
//         break;
//     }
// }

//for sorted array
// O(log n)
$arr = [1,2,4,7,10,12,15,18,20];
$left = 0;
$right = count($arr) -1;
$mid = ceil(($left + $right) / 2);
while($left <= $right){
    if($arr[$mid] === $search){
        echo "=======element found============";
        break;
    }else if($arr[$mid] > $search){
        $right = $mid - 1;
    }else{
        $left = $mid + 1;
    }
    $mid = ceil(($left + $right) / 2);
}
