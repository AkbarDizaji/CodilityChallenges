<?php
function solution($H){
	/*
	 * 100%, https://codility.com/demo/results/training9J38JW-HSJ/
	 */
	//We need at least one block
	$blocks=1;
	$currentBlocks=array();
	$currentBlocks[]=$H[0];
	for($i=1; $i<count($H); $i++){
		$blockFound=false;
		//If the current height is higher than the previous, we need a new block + continue with the previous one
		if($H[$i]>$H[$i-1]){
			$blocks++;
			$currentBlocks[]=$H[$i];
		}
		//If the current height is lower than the previous, one block ends, but we need a new block
		else if($H[$i]<$H[$i-1]){
			//Take the last block of the currentBlocks
			while(count($currentBlocks)!=0 && $blockFound===false){
				end($currentBlocks);
				$key = key($currentBlocks);
				if($currentBlocks[$key] === $H[$i]){
					$blockFound=true;
				}
				else if($currentBlocks[$key] < $H[$i]){
					$blockFound = true;
					$currentBlocks[]=$H[$i];
					$blocks++;
				}
				else{
					unset($currentBlocks[$key]);
				}
			}
			if(empty($currentBlocks)){
				$blocks++;
				$currentBlocks[]=$H[$i];
			}
		}
		//If equal, nothing will happen
	}
	return $blocks;
}