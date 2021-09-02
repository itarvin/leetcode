<?php
/*
* 977. 有序数组的平方
给定一个按非递减顺序排序的整数数组 A，返回每个数字的平方组成的新数组，要求也按非递减顺序排序。



示例 1：

输入：[-4,-1,0,3,10]
输出：[0,1,9,16,100]
示例 2：

输入：[-7,-3,2,3,11]
输出：[4,9,9,49,121]


提示：

1 <= A.length <= 10000
-10000 <= A[i] <= 10000
A 已按非递减顺序排序。
  */
class Solution {
    /**
     * @param Integer[] $A
     * @return Integer[]
     */
    function sortedSquares($A) {
        foreach ($A as $key => $item) {
            $A[$key] = pow(abs($item), 2)  ;
        }
        asort($A);
        return $A;
    }
}

$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new Solution();

$A = [-4,-1,0,3,10];
$res = $object->sortedSquares($A);
$t2 = microtime(true);
/****************************... 执行代码结束 ...****************************/
var_dump($res);
echo '<hr />';
var_dump('耗时'.round($t2-$t1,3).'秒');
echo '<hr />';
var_dump('Now memory_get_usage: ' . memory_get_usage());
