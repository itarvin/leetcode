<?php
/*
* 35. 搜索插入位置
给定一个排序数组和一个目标值，在数组中找到目标值，并返回其索引。如果目标值不存在于数组中，返回它将会被按顺序插入的位置。

你可以假设数组中无重复元素。

示例 1:

输入: [1,3,5,6], 5
输出: 2
示例 2:

输入: [1,3,5,6], 2
输出: 1
示例 3:

输入: [1,3,5,6], 7
输出: 4
示例 4:

输入: [1,3,5,6], 0
输出: 0
 */
class Solution {

	/**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer
     */
    function searchInsert($nums, $target) {
		foreach ($nums as $key => $item) {
			if ($target <= $item) {
				return $key;
			}
			if (($key == count($nums) - 1) && ($target > $item)) {
				return $key + 1;
			}
		}

		// $count = count($nums);
		// for ($i=0; $i < $count; $i++) {
		// 	if ($target <= $nums[$i]) {
		// 		return $i;
		// 	}
		// 	if (($i == $count - 1) && ($target > $nums[$i])) {
		// 		return $i + 1;
		// 	}
		// }
    }
}

$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new Solution();
$nums = [1,3,5,6];
$target = 5;
$res = $object->searchInsert($nums, $target);
$t2 = microtime(true);
/****************************... 执行代码结束 ...****************************/
var_dump($res);
echo '<hr />';
var_dump('耗时'.round($t2-$t1,3).'秒');
echo '<hr />';
var_dump('Now memory_get_usage: ' . memory_get_usage());
