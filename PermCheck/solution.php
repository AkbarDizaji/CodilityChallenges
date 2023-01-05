<?php
function solution($A) {
    $N=count($A);
    // Implement your solution 
    sort($A);
    if($A[0]!=1){
        return 0;
    }
    for($i=0;$i<$N-1;$i++){
        if($A[$i]+1 != $A[$i+1]){
            return 0;
        }
    }
    return 1;
}



//Correctness:83
//Performance:66
//Total:75
function badSolution($A) {
    $N = count($A);
    $shouldSum = ($N*($N+1))/2;
    $sum = array_sum($A);
    if($sum==$shouldSum){
        return 1;
    }
    return 0;
}