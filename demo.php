<?php
$arr = ['一','二','三','四','五'];
/**
*在指定位置添加数组元素 后面元素向后面移动一位
*/
function insert($num,$ys,$arr){
	$new = [];
	foreach($arr as $key => $val){
		//echo $val;
		if($num > $key){
			$new[] = $arr[$key];
		}elseif($num == $key){
			$new[] = $ys;
		}else{
			$arr[] = 1;
			$new[] = $arr[$key-1];
		}
	}
	return $new;
}
$newarr = insert(2,'哈哈',$arr);
echo "<pre/>";
var_dump($newarr);


/**
 * @param $n
 * @param $m
 * @return int 0 1 -2 -3 4 5 -6 -7 ....
 */
function ph($n,$m){
	if($n%($m*2) != 0){
		exit("重新输入");
	}
	$p = '+';
	$j = '-';
	$z = "";
	$sum = 0;
	for($i=0,$w=1;$i<$n;$i++){
		if(empty($z)){$z = $p;}
		if($i%($m)==0){
			if($z == $p){
				$z = $j;
			}else{
				$z = $p;
			}
		}
		$w++;
		$sum += (int)($z.$w);
	}
	return  $sum;
}
ph(8,2);
