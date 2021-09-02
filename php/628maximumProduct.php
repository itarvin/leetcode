<?php
/*
* 628. 三个数的最大乘积
给定一个整型数组，在数组中找出由三个数组成的最大乘积，并输出这个乘积。

示例 1:

输入: [1,2,3]
输出: 6
示例 2:

输入: [1,2,3,4]
输出: 24
注意:

给定的整型数组长度范围是[3,104]，数组中所有的元素范围是[-1000, 1000]。
输入的数组中任意三个数的乘积不会超出32位有符号整数的范围。
  */
class Solution {
    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function maximumProduct($nums) {
        $size = count($nums);
        if($size == 3) {
            return $nums[0]*$nums[1]*$nums[2];
        }
        sort($nums);
        return max($nums[$size-1]*$nums[$size-2]*$nums[$size-3] , $nums[$size-1] * $nums[0] * $nums[1]);
    }
}

$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new Solution();

$nums = [-4,-3,-2,-1,60];
$res = $object->maximumProduct($nums);
$t2 = microtime(true);
/****************************... 执行代码结束 ...****************************/
var_dump($res);
echo '<hr />';
var_dump('耗时'.round($t2-$t1,3).'秒');
echo '<hr />';
var_dump('Now memory_get_usage: ' . memory_get_usage());
