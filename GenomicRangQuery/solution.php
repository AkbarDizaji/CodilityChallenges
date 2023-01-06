<?php



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