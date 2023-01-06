<?php
function solution($A) {
    // Implement your solution here
    $west = 0;
    $east = 0;
    foreach($A as $e){
        if($e==0){
            $east++;
        }
        else{
            $west += $east;
        }
    }
    if($west>1000000000){
        return -1;
    }
    return $west;
}