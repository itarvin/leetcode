<?php
/*
* 349. 两个数组的交集
* 给定两个数组，编写一个函数来计算它们的交集。

* 示例 1：
* 输入：nums1 = [1,2,2,1], nums2 = [2,2]
* 输出：[2]
* 示例 2：
* 输入：nums1 = [4,9,5], nums2 = [9,4,9,8,4]
* 输出：[9,4]
*
* 说明：
*
* 输出结果中的每个元素一定是唯一的。
* 我们可以不考虑输出结果的顺序。
 */
class Solution {

	/**
     * @param Integer[] $nums1
     * @param Integer[] $nums2
     * @return Integer[]
     */
    function intersection($nums1, $nums2) {
		return array_unique(array_intersect($nums1, $nums2));
    }
}

$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new Solution();
$nums1 = [1,2,2,1];
$nums2 = [2,2];
$res = $object->intersection($nums1, $nums2);
$t2 = microtime(true);
/****************************... 执行代码结束 ...****************************/
var_dump($res);
echo '<hr />';
var_dump('耗时'.round($t2-$t1,3).'秒');
echo '<hr />';
var_dump('Now memory_get_usage: ' . memory_get_usage());
