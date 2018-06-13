<?php
/**
*	在线处理     求一行 数中最大的值(可以是多列和)
*/

function get_max($arr){
	$max = 0;  //最大的列和
	$m = 0;	//当前的列和
	foreach ($arr as $key => $val){
			$m += $val;
		
		if($m > $max){
			$max = $m;
		}else if($m < 0){
			$m = 0;
		}
	}
	return $max;
}

$arr = [1,4,-4,5,-5];
echo get_max($arr);