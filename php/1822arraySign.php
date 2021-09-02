<?php
/**
 * 1822. 数组元素积的符号
难度
简单

7

收藏

分享
切换为英文
接收动态
反馈
已知函数 signFunc(x) 将会根据 x 的正负返回特定值：

如果 x 是正数，返回 1 。
如果 x 是负数，返回 -1 。
如果 x 是等于 0 ，返回 0 。
给你一个整数数组 nums 。令 product 为数组 nums 中所有元素值的乘积。

返回 signFunc(product) 。



示例 1：

输入：nums = [-1,-2,-3,-4,3,2,1]
输出：1
解释：数组中所有值的乘积是 144 ，且 signFunc(144) = 1
示例 2：

输入：nums = [1,5,0,2,-3]
输出：0
解释：数组中所有值的乘积是 0 ，且 signFunc(0) = 0
示例 3：

输入：nums = [-1,1,-1,1,-1]
输出：-1
解释：数组中所有值的乘积是 -1 ，且 signFunc(-1) = -1


提示：

1 <= nums.length <= 1000
-100 <= nums[i] <= 100
 */
/*
*
*/
 class Solution {

     /**
      * @param Integer[] $nums
      * @return Integer
      */
    function arraySign($nums) {
        $res = array_product($nums);
        if ($res == 0) {
            return 0;
        }elseif ($res) {
            return 1;
        }elseif ($res < 0) return -1;
    }
}

$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new Solution();
$nums = [-1,1,-1,1,-1];
$res = $object->arraySign($nums);
$t2 = microtime(true);
/****************************... 执行代码结束 ...****************************/
var_dump($res);
echo '<hr />';
var_dump('耗时'.round($t2-$t1,3).'秒');
echo '<hr />';
var_dump('Now memory_get_usage: ' . memory_get_usage());
