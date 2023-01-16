<?php
function solution($A) {
    // Implement your solution here
    $stack = array();
    $c = count($A);
    for($i=0;$i<$c;$i++){
        if(count($stack)==0){
            array_push($stack,$A[$i]);
        }
        else{
            if($A[$i]!=$stack[count($stack)-1]){
                array_pop($stack);
            }
            else{
                array_push($stack,$A[$i]);
            }
        }
    }
    $leader = $stack[0];
    $tl =0;
    for($i=0;$i<$c;$i++){
        if($leader==$A[$i]){
            $tl++;
        }
    }
    $N=0;
    $result = 0;
    for($i=0;$i<$c-1;$i++){
        if($A[$i]==$leader){
            $N++;
        }
        $isLeftLeader = $N>=(intval(($i+1)/2)+1);
        $isRightLeader = $tl - $N >= (intval(($c-$i-1)/2)+1);
        if($isLeftLeader && $isRightLeader){
            $result++;
        }
    }
    return $result;


}