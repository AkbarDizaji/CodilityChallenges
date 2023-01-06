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

     //Correctness:100 , Performance:20, Torla:60s
     function badSolution($A) {
        // Implement your solution here
        $arr = array();
        $temp = 0;
        for($i=0;$i<count($A);$i++){
            $temp = $temp + $A[$i];
            array_push($arr,$temp);
        }
        $result = $arr[1]/2;
        $resultIndex =0;
        for($i=0;$i<count($A);$i++){
            for($j=$i+1;$j<count($A);$j++){
                $temp =0;
                if($i==0){
                $temp=($arr[$j])/($j+1);
                }else{
                $temp=($arr[$j]-$arr[$i-1])/($j-$i+1);
                }
            if($temp<$result){
             $result = $temp;
             $resultIndex = $i;
            }
    
            }
        }
        return $resultIndex; 
    }


