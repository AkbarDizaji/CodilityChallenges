<?php
    function solution($A) {

        $length = count($A);
        $min_average = ($A[0] + $A[1]) / 2.0;
        $position = 0;
 
        if ($length==2) return 0;
 
        for ($i=2 ; $i < $length; $i++) {
 
         $temp1 = ($A[$i-1] + $A[$i]) / 2.0;
         $temp2 = ($A[$i-2] + $A[$i-1] + $A[$i]) / 3.0;
 
             if ($temp1 < $min_average) {
                 $position = $i - 1;
                 $min_average = $temp1;
             }
 
             if ($temp2 < $min_average) {
                 $position = $i - 2;
                 $min_average = $temp2;
             }
 
         }
 
         return $position;
 
     }