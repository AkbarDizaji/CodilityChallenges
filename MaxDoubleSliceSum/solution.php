<?php
function solution($A) {
    // Implement your solution here
        $sizeOfA = sizeof($A);
    if($sizeOfA < 3)
        return 0;

    $partialSum1[1] = 0;
    $partialSum2[$sizeOfA-2] = 0;

    for($i=2; $i<($sizeOfA-1); $i++){
        $partialSum1[$i] = max(0, $partialSum1[$i-1] + $A[$i-1]);
        $partialSum2[$sizeOfA-$i-1] = max(0, $partialSum2[$sizeOfA-$i] + $A[$sizeOfA-$i]);
    }

    $maxSum = $partialSum1[1] + $partialSum2[1];
    for($i=1; $i<($sizeOfA-1); $i++){
        $maxSum = max($maxSum, $partialSum1[$i] + $partialSum2[$i]);
    }

    return $maxSum;
}