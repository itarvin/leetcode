<?php
/**
 * 1. 两数之和
 * 给定一个整数数组 nums 和一个目标值 target，请你在该数组中找出和为目标值的那 两个 整数，并返回他们的数组下标。
 *
 * 你可以假设每种输入只会对应一个答案。但是，数组中同一个元素不能使用两遍。
 *
 *
 *
 * 示例:
 *
 * 给定 nums = [2, 7, 11, 15], target = 9
 *
 * 因为 nums[0] + nums[1] = 2 + 7 = 9
 * 所以返回 [0, 1]
 * 通过次数1,490,721提交次数2,996,696
 *
 *
 * 执行结果：通过 显示详情
 * 执行用时：3200 ms, 在所有 PHP 提交中击败了5.02%的用户
 * 内存消耗：16.2 MB, 在所有 PHP 提交中击败了10.38%的用户
 * link https://leetcode-cn.com/problems/two-sum/
 */
class Solution {

	/**
	 * @param Integer[] $nums
	 * @param Integer $target
	 * @return Integer[]
	 */
	function twoSum($nums, $target) {
		foreach ($nums as $key => $item) {
			foreach ($nums as $key2 => $item2) {
				if ($key != $key2) {
					$tempSums = $nums[$key] + $nums[$key2];
					if ($tempSums == $target){
						return [$key, $key2];
					}
				}
			}
		}
	}
}

$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new Solution();
$nums = [2, 7, 11, 15];
// $nums = [3,2,3];
$target = 9;
// $target = 6;
$res = $object->twoSum($nums, $target);
$t2 = microtime(true);
/****************************... 执行代码结束 ...****************************/
var_dump($res);
echo '<hr />';
var_dump('耗时'.round($t2-$t1,3).'秒');
echo '<hr />';
var_dump('Now memory_get_usage: ' . memory_get_usage());
