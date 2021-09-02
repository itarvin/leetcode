<?php
/*
* 643. 子数组最大平均数 I
给定 n 个整数，找出平均数最大且长度为 k 的连续子数组，并输出该最大平均数。

示例 1:

输入: [1,12,-5,-6,50,3], k = 4
输出: 12.75
解释: 最大平均数 (12-5-6+50)/4 = 51/4 = 12.75


注意:

1 <= k <= n <= 30,000。
所给数据范围 [-10,000，10,000]。
  */
class Solution {
    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return Float
     */
    function findMaxAverage($nums, $k) {
        $sum = array_sum(array_slice($nums, $i, $k));
        $arr = [$sum];
        for ($i = 1; $i <= count($nums) - $k; $i++) {
            $sum = $arr[] = $sum - $nums[$i - 1] + $nums[$i + $k - 1];
        }
        return max($arr) / $k;
    }
}

$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new Solution();

$nums = [1,12,-5,-6,50,3];
$k = 4;
$res = $object->findMaxAverage($nums, $k);
$t2 = microtime(true);
/****************************... 执行代码结束 ...****************************/
var_dump($res);
echo '<hr />';
var_dump('耗时'.round($t2-$t1,3).'秒');
echo '<hr />';
var_dump('Now memory_get_usage: ' . memory_get_usage());
