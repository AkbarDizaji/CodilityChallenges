<?php
function solution($A) {
    // Implement your solution here
    $result = 1;
    sort($A);
    for($i=0;$i<count($A);$i++){
        if($result<$A[$i]){
            return $result;
        }
        if($A[$i]>0){
            $result = $A[$i]+1;
        }
    }
    return $result;
}