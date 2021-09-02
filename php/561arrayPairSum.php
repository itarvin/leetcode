<?php
/*
* 561. 数组拆分 I
给定长度为 2n 的数组, 你的任务是将这些数分成 n 对, 例如 (a1, b1), (a2, b2), ..., (an, bn) ，使得从1 到 n 的 min(ai, bi) 总和最大。

示例 1:

输入: [1,4,3,2]

输出: 4
解释: n 等于 2, 最大总和为 4 = min(1, 2) + min(3, 4).
提示:

n 是正整数,范围在 [1, 10000].
数组中的元素范围在 [-10000, 10000].
  */
class Solution {
    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function arrayPairSum($nums) {
        asort($nums);
        $max = 0;
        for ($i=0; $i < (count($nums) / 2); $i++) {
            $temp = array_slice($nums, 2 * $i, 2);
            $max += min($temp);
        }
        return $max;
    }
}

$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new Solution();

$nums = [1,4,3,2];
$res = $object->arrayPairSum($nums);
$t2 = microtime(true);
/****************************... 执行代码结束 ...****************************/
var_dump($res);
echo '<hr />';
var_dump('耗时'.round($t2-$t1,3).'秒');
echo '<hr />';
var_dump('Now memory_get_usage: ' . memory_get_usage());
