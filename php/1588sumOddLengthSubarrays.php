<?php
/*
* 1588. 所有奇数长度子数组的和
给你一个正整数数组 arr ，请你计算所有可能的奇数长度子数组的和。

子数组 定义为原数组中的一个连续子序列。

请你返回 arr 中 所有奇数长度子数组的和 。



示例 1：

输入：arr = [1,4,2,5,3]
输出：58
解释：所有奇数长度子数组和它们的和为：
[1] = 1
[4] = 4
[2] = 2
[5] = 5
[3] = 3
[1,4,2] = 7
[4,2,5] = 11
[2,5,3] = 10
[1,4,2,5,3] = 15
我们将所有值求和得到 1 + 4 + 2 + 5 + 3 + 7 + 11 + 10 + 15 = 58
示例 2：

输入：arr = [1,2]
输出：3
解释：总共只有 2 个长度为奇数的子数组，[1] 和 [2]。它们的和为 3 。
示例 3：

输入：arr = [10,11,12]
输出：66


提示：

1 <= arr.length <= 100
1 <= arr[i] <= 1000
  */
class Solution {
    /**
     * @param Integer[] $arr
     * @return Integer
     */
    function sumOddLengthSubarrays($arr) {
        if (count($arr) <= 2) {
            return array_sum($arr);
        }
        $ans = 0;
        foreach (range(1, count($arr), 2) as $key => $n) {
            foreach (range(0, count($arr) - $n) as $ky => $i) {
                // var_dump(array_slice($arr, $i, $n));
                $ans += array_sum(array_slice($arr, $ky, $n));
            }
        }
        return $ans;
    }

    function cutArr($arr, $begin, $end){
        $newArr = [];
        foreach ($arr as $key => $item) {
            if ($key >= $begin || $key <= $end) $newArr[] = $item;
        }
        return $newArr;
    }
}

$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new Solution();

$arr =  [10,11,12];
$res = $object->sumOddLengthSubarrays($arr);
$t2 = microtime(true);
/****************************... 执行代码结束 ...****************************/
var_dump($res);
echo '<hr />';
var_dump('耗时'.round($t2-$t1,3).'秒');
echo '<hr />';
var_dump('Now memory_get_usage: ' . memory_get_usage());
