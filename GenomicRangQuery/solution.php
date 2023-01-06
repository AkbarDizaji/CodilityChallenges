<?php
function solution($S, $P, $Q) {
    $sizeOfS = strlen($S);
 $sizeOfP = sizeof($P);
 $impact_factor = array('A' => 1, 'C' => 2, 'G' => 3, 'T' => 4);
 for($i=0; $i<$sizeOfS; $i++){
     foreach($impact_factor as $key => $value){
         if($i == 0){
             $prefix_sum[$key][$i] = ($S[$i] == $key) ? 1 : 0;
         }else{
             if($S[$i] == $key)
                 $prefix_sum[$key][$i] = $prefix_sum[$key][$i-1] + 1;
             else
                 $prefix_sum[$key][$i] = $prefix_sum[$key][$i-1];
         }
     }
 }
 for($i=0; $i<$sizeOfP; $i++){
     foreach($impact_factor as $key => $value){
         if($Q[$i]==$P[$i]){
             $result[$i] = $impact_factor[$S[$Q[$i]]];
             break;
         }elseif($P[$i]-1 >= 0 && $prefix_sum[$key][$Q[$i]]-$prefix_sum[$key][$P[$i]-1]>0){
             $result[$i] = $impact_factor[$key];
             break;
         }elseif($P[$i]-1 < 0 && $prefix_sum[$key][$Q[$i]] > 0){
             $result[$i] = $impact_factor[$key];
             break;
         }
     }
 }
 return $result;
}



//Correctness:100 , Performance:0 , Total:62
function badSolution($S, $P, $Q) {
    // Implement your solution here
        $arr = array();
    $min=array();
    for($i=0;$i<count(str_split($S));$i++){
        if($S[$i]=='A'){
            array_push($arr,1);
        }else if($S[$i]=='C'){
            array_push($arr,2);
        }else if($S[$i]=='G'){
            array_push($arr,3);
        }else{
            array_push($arr,4);
        }
    }

    for($i=0;$i<count($P);$i++){
        if($P[$i]!=$Q[$i]){
        $temp = min(array_slice($arr,$P[$i],$Q[$i]-$P[$i]+1));
        }else{
            $temp = $arr[$P[$i]];
        }
        array_push($min,$temp);
    }
    return $min;
}