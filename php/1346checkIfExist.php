<?php
/*
*1346. 检查整数及其两倍数是否存在
给你一个整数数组 arr，请你检查是否存在两个整数 N 和 M，满足 N 是 M 的两倍（即，N = 2 * M）。

更正式地，检查是否存在两个下标 i 和 j 满足：

i != j
0 <= i, j < arr.length
arr[i] == 2 * arr[j]


示例 1：

输入：arr = [10,2,5,3]
输出：true
解释：N = 10 是 M = 5 的两倍，即 10 = 2 * 5 。
示例 2：

输入：arr = [7,1,14,11]
输出：true
解释：N = 14 是 M = 7 的两倍，即 14 = 2 * 7 。
示例 3：

输入：arr = [3,1,7,11]
输出：false
解释：在该情况下不存在 N 和 M 满足 N = 2 * M 。


提示：

2 <= arr.length <= 500
-10^3 <= arr[i] <= 10^3
 */
class Solution {

	/**
     * @param Integer[] $arr
     * @return Boolean
     */
    function checkIfExist($arr) {
		$count = count($arr);
		for ($i=0; $i < $count; $i++) {
			for ($j=$i + 1; $j < $count; $j++) {
				if (($arr[$i] / $arr[$j] == 2) || ($arr[$i] * 2 == $arr[$j])) {
					return True;
				}
			}
		}
		return False;
    }
}

$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new Solution();
$arr = [10,2,5,3];
$res = $object->checkIfExist($arr);
$t2 = microtime(true);
/****************************... 执行代码结束 ...****************************/
var_dump($res);
echo '<hr />';
var_dump('耗时'.round($t2-$t1,3).'秒');
echo '<hr />';
var_dump('Now memory_get_usage: ' . memory_get_usage());
