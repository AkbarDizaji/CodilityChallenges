<?php
function solution($N) {
    // Implement your solution here
        $i=1;
    $min=2*($N+1);
    while($i*$i<=$N){
        if($N%$i==0){
            $perimeter = 2*($i+($N/$i));
            if($perimeter<$min){
                $min = $perimeter;
            }
        }
        $i++;
    }
    return $min;
}