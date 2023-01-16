<?php
function solution($A) {
    // Implement your solution here
    $min = $A[0];
    $max = 0;
    $profit =0;
    for($i=0;$i<count($A);$i++){
        if($A[$i]<=$min){
            $min = $A[$i];
            $max = 0;
        }else if($A[$i]>=$max){
            $max = $A[$i];
        }
        if($max-$min>$profit){
            $profit = $max - $min;
        }
    }
    return $profit;
}