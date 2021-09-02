<?php
/* 941. 有效的山脉数组
给定一个整数数组 A，如果它是有效的山脉数组就返回 true，否则返回 false。

让我们回顾一下，如果 A 满足下述条件，那么它是一个山脉数组：

A.length >= 3
在 0 < i < A.length - 1 条件下，存在 i 使得：
A[0] < A[1] < ... A[i-1] < A[i]
A[i] > A[i+1] > ... > A[A.length - 1]






示例 1：

输入：[2,1]
输出：false
示例 2：

输入：[3,5,5]
输出：false
示例 3：

输入：[0,3,2,1]
输出：true


提示：

0 <= A.length <= 10000
0 <= A[i] <= 10000
 */
class Solution {

    /**
     * @param Integer[] $A
     * @return Boolean
     */
    function validMountainArray($A) {
        $count = count($A);
        if($count <3)  return False;
        $max_index = array_search(max($A), $A);
        if($max_index == 0 || $max_index == $count-1) return False;
        $i=0;
        while($i < $max_index){
             if($A[$i] >= $A[$i+1]) return False;
             $i++;
        }
        $j = $max_index;
        while($j < $count-1){
             if($A[$j] <= $A[$j+1]) return False;
             $j++;
        }
        return True;
    }
}

$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new Solution();
$A = [0,1,2,1,2];
$res = $object->validMountainArray($A);
$t2 = microtime(true);
/****************************... 执行代码结束 ...****************************/
var_dump($res);
echo '<hr />';
var_dump('耗时'.round($t2-$t1,3).'秒');
echo '<hr />';
var_dump('Now memory_get_usage: ' . memory_get_usage());
