<?php
function solution($A) {
    // Implement your solution here
        $N = count($A);
    $right = array();
    $left = array();
    for($i=0;$i<$N;$i++){
        $right[$i]=$A[$i]+$i;
        $left[$i] = $i - $A[$i];
    }
    sort($left);
    sort($right);
    $count = 0;
    $j=0;
    for($i=0;$i<$N;$i++){
            while($j<$N&&$right[$i]>=$left[$j]){
                $count += $j - $i;
                if($count>10000000){
                    return -1;
                }
                $j++;
            }
    }
    return $count;
}