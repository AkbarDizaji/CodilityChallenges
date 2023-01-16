<?php
function solution($A) {
    // Implement your solution here
    $sum =0;
    $results = array();
    for($i=0;$i<count($A);$i++){
        if($A[$i]<0){
            array_push($results,$sum);
        }
        if($sum+$A[$i]>0){
            $sum = $sum + $A[$i];
        }
        else{
            $sum =0;
        }
    }
    array_push($results,$sum);
    return max($results)>0?max($results):max($A);
}