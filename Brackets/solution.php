<?php
function solution($S) {
    // Implement your solution here
    $stack = array();
    $A = str_split($S);
    for($i=0;$i<count($A);$i++){
        if($A[$i]=='['||$A[$i]=='('||$A[$i]=='{'){
            array_push($stack,$A[$i]);
        }
        if($A[$i]==']'){
            if(array_pop($stack)!='['){
                return 0;
            }
        }
        
        if($A[$i]==')'){
            if(array_pop($stack)!='('){
                return 0;
            }
        }
        
        if($A[$i]=='}'){
            if(array_pop($stack)!='{'){
                return 0;
            }
        }
    }
    if(count($stack)!=0){
        return 0;
    }
    return 1;
}