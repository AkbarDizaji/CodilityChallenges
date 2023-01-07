<?php

function solution($A) {
    // Implement your solution here
    sort($A);
    $N = count($A);
    return max($A[0]*$A[1]*$A[$N-1],$A[$N-1]*$A[$N-2]*$A[$N-3]);
}