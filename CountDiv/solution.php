<?php

function solution($A, $B, $K) {
    // Implement your solution here
    $c =0;
    if($A%$K==0){
        $c++;
    }
    $ad = intval($A/$K);
    $bd = intval($B/$K);
    return $bd-$ad+$c;
}
