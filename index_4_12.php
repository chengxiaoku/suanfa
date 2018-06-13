<?php

//二分法
//生成一个10个元素的数组
$num = 10;
for ($i = 0;$i<$num;$i++){
    $arr[] = rand(1,100);
}
sor($arr,true); //自定义函数
var_dump($arr);
/**
 * @param $arr  array 待查找数组
 * @param $serch int 要查找元素
 * @return int  返回查找元素的索引，未找到为-1
 */
function fun_serch($arr,$serch){
    echo $serch;
    $min = 0;$max = count($arr)-1;
    while($min<=$max){
        $z = (int)(($max+$min)/2); //取中间值
        if($arr[$z] == $serch){ //退出条件
            return  $z;
        }else{
            if($serch < $arr[$z]){ //升序 >   降序 <
                $min = $z+1;
            }else{
                $max = $z-1;
            }
        }
    }
    return -1;  //查找不到
}
var_dump(fun_serch($arr,$arr[rand(0,$num)]));
/**
 * @param $arr  待排序数组
 * @param bool $asc false:升序，true:降序
 */
function sor(&$arr,$asc = false){
    for($i = 0;$i<count($arr);$i++){

        for($j = count($arr)-1;$j>$i;$j--){

            if($asc ? $arr[$j]>$arr[$i] :$arr[$j]<$arr[$i]){
                $z = $arr[$i];
                $arr[$i] = $arr[$j];
                $arr[$j] = $z;
            }
        }
    }
}

