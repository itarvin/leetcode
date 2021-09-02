<?php
/*
 * 350. 两个数组的交集 II
 * 给定两个数组，编写一个函数来计算它们的交集。
 * 示例 1：
 *
 * 输入：nums1 = [1,2,2,1], nums2 = [2,2]
 * 输出：[2,2]
 * 示例 2:
 *
 * 输入：nums1 = [4,9,5], nums2 = [9,4,9,8,4]
 * 输出：[4,9]
 *
 *
 * 说明：
 *
 * 输出结果中每个元素出现的次数，应与元素在两个数组中出现次数的最小值一致。
 * 我们可以不考虑输出结果的顺序。
 * 进阶：
 *
 * 如果给定的数组已经排好序呢？你将如何优化你的算法？
 * 如果 nums1 的大小比 nums2 小很多，哪种方法更优？
 * 如果 nums2 的元素存储在磁盘上，内存是有限的，并且你不能一次加载所有的元素到内存中，你该怎么办？
 */
class Solution {

	/**
     * @param Integer[] $nums1
     * @param Integer[] $nums2
     * @return Integer[]
     */
    function intersect($nums1, $nums2) {
		$tempArr = count($nums1) > count($nums2) ? $nums1 : $nums2;
		$existArr = count($nums1) > count($nums2) ? $nums2 : $nums1;

		$res = [];
		foreach ($tempArr as $key => $item) {
			foreach ($existArr as $k => $items) {
				if ($item == $items) {
					$res[] = $item;
				}
			}
		}
		var_dump($res);die;
		return $res;
    }
}

$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new Solution();
$nums1 = [1,2,2,1];
$nums2 = [2];
$res = $object->intersect($nums1, $nums2);
$t2 = microtime(true);
/****************************... 执行代码结束 ...****************************/
var_dump($res);
echo '<hr />';
var_dump('耗时'.round($t2-$t1,3).'秒');
echo '<hr />';
var_dump('Now memory_get_usage: ' . memory_get_usage());
