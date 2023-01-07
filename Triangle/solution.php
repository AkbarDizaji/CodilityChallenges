<?php
function solution($A) {
    // Implement your solution here
    sort($A);
    for($i=2;$i<count($A);$i++){
        if(($A[$i-2]+$A[$i-1]>$A[$i]) &&
            ($A[$i-2]+$A[$i]>$A[$i-1]) &&
            ($A[$i]+$A[$i-1]>$A[$i-2])
        ){
            return 1;
        }
    }
    return 0;
}