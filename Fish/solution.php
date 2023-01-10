<?php
function solution($A, $B) {
    // Implement your solution here
    $d = array();
    $N = count($B);
    for($i=0;$i<$N;$i++){
        if($B[$i]==1){
            array_push($d,$i);
        }
    }
    for($i=count($d)-1;$i>=0;$i--){
        $j=$d[$i]+1;
        while($j<$N){
            if($A[$j]>$A[$d[$i]]){
                unset($A[$d[$j]]);
            }else{
                unset($A[$j]);
            }
            $j++;
        }
    }
    return count($A);
}
