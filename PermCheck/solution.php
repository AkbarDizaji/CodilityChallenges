<?php




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