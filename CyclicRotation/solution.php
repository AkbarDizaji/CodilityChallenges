function solution($A, $K) {
    if(count($A)==0){
        return $A;
    }
    $temp = array();
    for($i=0; $i<$K; $i++) { 
        $t = array_pop($A);
        array_unshift($A,$t);
    }
    return $A;
}


//In this case when array's size is less than $K so we would get error of index in line 21
function badSolution($A, $K) {
    // Implement your solution here
    $arr = array();
    $c = count($A);
    for($i=0;$i<$c;$i++){
        if($i<$K){
            array_push($arr,$A[$c-$K+$i]);
        }
        else{
            array_push($arr,$A[$i-$K]);
        }
    }
    return $arr;
}
