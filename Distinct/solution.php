<?php
function solution($A) {
    // Implement your solution here
    sort($A);
    $N = count($A);
    if($N==0){
        return 0;
    }
    $c = 1;
    for($i=1;$i<$N;$i++){
        if($A[$i]!=$A[$i-1]){
            $c++;
        }
    }
    return $c;
}