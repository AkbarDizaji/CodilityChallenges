<?php
function solution($A) {
    // Implement your solution here
        $stack = array();
    for($i=0;$i<count($A);$i++){
        if(count($stack)==0){
            array_push($stack,$A[$i]);
        }else{
            if($stack[count($stack)-1]!=$A[$i]){
                array_pop($stack);
            }
            else{
                array_push($stack,$A[$i]);
            }
        }
    }
    if(count($stack)==0){
        return -1;
    }
    $s = array_pop($stack);
    $index =0;
    $count = 0;
    for($i=0;$i<count($A);$i++){
        if($A[$i]==$s){
            $count++;
            $index = $i;
        }
    }
    return $count>=floor(count($A)/2)+1 ? $index :-1;
}