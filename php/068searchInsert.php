<?php
/**
 * 剑指 Offer II 068. 查找插入位置
难度
简单

0

收藏

分享
切换为英文
接收动态
反馈
给定一个排序的整数数组 nums 和一个整数目标值 target ，请在数组中找到 target ，并返回其下标。如果目标值不存在于数组中，返回它将会被按顺序插入的位置。

请必须使用时间复杂度为 O(log n) 的算法。



示例 1:

输入: nums = [1,3,5,6], target = 5
输出: 2
示例 2:

输入: nums = [1,3,5,6], target = 2
输出: 1
示例 3:

输入: nums = [1,3,5,6], target = 7
输出: 4
示例 4:

输入: nums = [1,3,5,6], target = 0
输出: 0
示例 5:

输入: nums = [1], target = 0
输出: 0


提示:

1 <= nums.length <= 104
-104 <= nums[i] <= 104
nums 为无重复元素的升序排列数组
-104 <= target <= 104
 */
/*
*
*/
 class Solution {

     /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer
     */
    function searchInsert($nums, $target) {
        $count = count($nums);
        $res = [];
        for ($i=0; $i < $count; $i++) {
            $item = $nums[$i];
            if ($item == $target) return $i;
            if ($target < $item) $res[] = $i;
        }
        if ($res) return min($res);
        return $count;
    }
}

$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new Solution();
$nums = [1,3,5,6];
$target = 2;
$res = $object->searchInsert($nums, $target);
$t2 = microtime(true);
/****************************... 执行代码结束 ...****************************/
var_dump($res);
echo '<hr />';
var_dump('耗时'.round($t2-$t1,3).'秒');
echo '<hr />';
var_dump('Now memory_get_usage: ' . memory_get_usage());
