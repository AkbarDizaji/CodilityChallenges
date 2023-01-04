<?php
function solution($A) {
    $N = count($A);
    $sum = array_sum($A);
    $rest = 0;
    $temp=abs(2*$A[0]-$sum);
    for($i=0;$i<$N-1;$i++){
        $rest=$rest+$A[$i];
        $result = abs(2*$rest-$sum);
        if($result<$temp){
            $temp=$result;
        }
    }
    return $temp;
}