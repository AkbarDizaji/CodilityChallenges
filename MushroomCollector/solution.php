<?php
function solution($A,$k,$m) {
    $preSum = array();
    array_push($preSum,$A[0]);
    for ($i = 1; $i < count($A);$i++)
    {
        array_push($preSum,$preSum[$i-1]+$A[$i]);
    }
    $max = 0;
    for($j=0;$j<min($k,$m);$j++){
        $first = $k - $i;
        $last = $k + ($m - 2 * $j);
        if ($first < 1) {
            $temp = $preSum[$last] - $preSum[$first - 1];
        }
        else{
            $temp = $preSum[$last];          
        }
        if($max<$temp){
            $max = $temp;
        }
    }
    return $max;
}