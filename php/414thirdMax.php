<?php
/*
* 414. 第三大的数
给定一个非空数组，返回此数组中第三大的数。如果不存在，则返回数组中最大的数。要求算法时间复杂度必须是O(n)。

示例 1:

输入: [3, 2, 1]

输出: 1

解释: 第三大的数是 1.
示例 2:

输入: [1, 2]

输出: 2

解释: 第三大的数不存在, 所以返回最大的数 2 .
示例 3:

输入: [2, 2, 3, 1]

输出: 1

解释: 注意，要求返回第三大的数，是指第三大且唯一出现的数。
存在两个值为2的数，它们都排第二。
  */
class Solution {
    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function thirdMax($nums) {
        $numArr = array_unique($nums);
        arsort($numArr);
        $numArr =  array_values($numArr);
        $count = count($numArr);
        if ($count == 1) {
            return $numArr[0];
        }elseif ($count > 1 && $count < 3) {
            return $numArr[0];
        }else {
            return $numArr[2];
        }
    }
}

$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new Solution();

$nums = [1, 2];
$res = $object->thirdMax($nums);
$t2 = microtime(true);
/****************************... 执行代码结束 ...****************************/
var_dump($res);
echo '<hr />';
var_dump('耗时'.round($t2-$t1,3).'秒');
echo '<hr />';
var_dump('Now memory_get_usage: ' . memory_get_usage());
