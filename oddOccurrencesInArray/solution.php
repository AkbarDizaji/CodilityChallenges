<?php
function solution($A) {
    // Implement your solution here
    	$count = array();
	foreach($A as $key=>$value){
		if(!isset($count[$value])){
			$count[$value]=1;
		}
		else if( $count[$value]===1 ){
			unset($count[$value]);
		}
	}
	return key($count);
}