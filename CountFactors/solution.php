<?php
function solution($N) {
    // Implement your solution here
    $i=1;
    $result = 0;
    while($i*$i<$N){
        if($N%$i==0){
            $result=$result+2;
        }
        $i++;
    }
    if($i*$i==$N){
        $result++;
    }
    return $result;
}