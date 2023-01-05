<?php
function solution($N, $A) {
    // Implement your solution here
    $M = count($A);
    $max =0;
    $p =0;
    $arr = array_fill(0,$N,0);
    for($i=0;$i<$M;$i++){
        if($A[$i]==$N+1){
            $max=$p;
        }
        else{
            if($arr[$A[$i]-1]-$max>0){
               $arr[$A[$i]-1]++;
            }else{
            $arr[$A[$i]-1]=$max+1;
            }
            if($p < $arr[$A[$i]-1]){
             $p = $arr[$A[$i]-1];
            }
        }
    }
    for($j=0;$j<$N;$j++){
        if($arr[$j]<$max){
            $arr[$j]=$max;
        }
    }
    return $arr;
}