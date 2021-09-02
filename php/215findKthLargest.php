<?php
/**
 * 215. 数组中的第K个最大元素
难度
中等

1249

收藏

分享
切换为英文
接收动态
反馈
给定整数数组 nums 和整数 k，请返回数组中第 k 个最大的元素。

请注意，你需要找的是数组排序后的第 k 个最大的元素，而不是第 k 个不同的元素。



示例 1:

输入: [3,2,1,5,6,4] 和 k = 2
输出: 5
示例 2:

输入: [3,2,3,1,2,4,5,5,6] 和 k = 4
输出: 4


提示：

1 <= k <= nums.length <= 104
-104 <= nums[i] <= 104
通过次数417,277提交次数644,822
 */
/*
*
*/
 class Solution {

     /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return Integer
     */
    function findKthLargest($nums, $k) {
        rsort($nums);
        return $nums[$k-1];
    }
}

$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new Solution();
$nums = [3,2,1,5,6,4];
$k = 2;
$res = $object->findKthLargest($nums, $k);
$t2 = microtime(true);
/****************************... 执行代码结束 ...****************************/
var_dump($res);
echo '<hr />';
var_dump('耗时'.round($t2-$t1,3).'秒');
echo '<hr />';
var_dump('Now memory_get_usage: ' . memory_get_usage());
