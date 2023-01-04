<?php
function solution($X, $Y, $D) {
    $distance = $Y - $X;
    $result = $distance / $D;
    if($distance%$D==0){
        return (int)$result;
    }
    return (int)$result+1;
}