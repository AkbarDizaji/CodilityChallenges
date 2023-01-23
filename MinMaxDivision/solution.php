<?php
function solution($K, $M, $A) {
    // Implement your solution 
    $N = count($A);
    $min = max($A);
    $max = array_sum($A);
    $result = 0;
    while($min<=$max){
    $sum = $A[0];
    $b = 1;
    $mid = (int) (($min+$max)/2);
   // print $mid;
    for($i=1;$i<$N;$i++){
        if(($sum + $A[$i])<=$mid){
            $sum = $sum + $A[$i];
        }
        else{
            $sum = $A[$i];
            $b++;
        }
    }
    if($b<=$K){
        $max = $mid-1;
        $result = $mid;
    }else{
        $min = $mid+1;
    }
    }
    return $result;
}