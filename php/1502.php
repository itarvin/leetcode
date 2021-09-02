<?php
/*
* 1502. 判断能否形成等差数列
给你一个数字数组 arr 。

如果一个数列中，任意相邻两项的差总等于同一个常数，那么这个数列就称为 等差数列 。

如果可以重新排列数组形成等差数列，请返回 true ；否则，返回 false 。



示例 1：

输入：arr = [3,5,1]
输出：true
解释：对数组重新排序得到 [1,3,5] 或者 [5,3,1] ，任意相邻两项的差分别为 2 或 -2 ，可以形成等差数列。
示例 2：

输入：arr = [1,2,4]
输出：false
解释：无法通过重新排序得到等差数列。


提示：

2 <= arr.length <= 1000
-10^6 <= arr[i] <= 10^6
  */
class Solution {
    /**
     * @param Integer[] $arr
     * @return Boolean
     */
    function canMakeArithmeticProgression($arr) {
        asort($arr)
        $arr = array_values();
        for ($i=1; $i < count($arr) - 1; $i++) {

            if ($arr[$i] * 2 !== $arr[$i - 1] + $arr[$i + 1]) {
                return false;
            }
        }
        return true;
    }
}

$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new Solution();

$arr = [1,2,4];
$res = $object->canMakeArithmeticProgression($arr);
$t2 = microtime(true);
/****************************... 执行代码结束 ...****************************/
var_dump($res);
echo '<hr />';
var_dump('耗时'.round($t2-$t1,3).'秒');
echo '<hr />';
var_dump('Now memory_get_usage: ' . memory_get_usage());
