<?php
function solution($X, $A) {
    $arr = array();
    for($i=0;$i<count($A);$i++){
        if($A[$i]<=$X){
            $arr[$A[$i]]=1;
        }
        if(count($arr)==$X){
            return $i;
        }
    }
    return -1;
}