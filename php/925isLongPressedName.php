<?php
/*
* 69. x 的平方根
实现 int sqrt(int x) 函数。

计算并返回 x 的平方根，其中 x 是非负整数。

由于返回类型是整数，结果只保留整数的部分，小数部分将被舍去。

示例 1:

输入: 4
输出: 2
示例 2:

输入: 8
输出: 2
说明: 8 的平方根是 2.82842...,
     由于返回类型是整数，小数部分将被舍去。
  */
class Solution {
    /**
     * @param String $name
     * @param String $typed
     * @return Boolean
     */
    function isLongPressedName($name, $typed) {
        $len1 = count(str_split($name));
        $len2 = count(str_split($typed));
        $i = 0;
        $j = 0;
        if($name[0] != $typed[0]) return false;
        while($i < $len1 && $j < $len2){
            if($name[$i]==$typed[$j]){
                $i++;
                $j++;
            }else if($name[$i-1] != $typed[$j]){
                return false;
            }else {
                $j ++;
            }
        }
        if($i != $len1) return false;
        $i--;
        $j--;
        while($j < $len2){
            if($typed[$j] != $name[$i]) return false;
            $j++;
        }
        return true;
    }
}

$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new Solution();

$name = "alex";
$typed = "aaleex";
$res = $object->isLongPressedName($name, $typed);
$t2 = microtime(true);
/****************************... 执行代码结束 ...****************************/
var_dump($res);
echo '<hr />';
var_dump('耗时'.round($t2-$t1,3).'秒');
echo '<hr />';
var_dump('Now memory_get_usage: ' . memory_get_usage());
