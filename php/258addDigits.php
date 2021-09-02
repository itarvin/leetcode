<?php
/*
* 258. 各位相加
给定一个非负整数 num，反复将各个位上的数字相加，直到结果为一位数。

示例:

输入: 38
输出: 2
解释: 各位相加的过程为：3 + 8 = 11, 1 + 1 = 2。 由于 2 是一位数，所以返回 2。
进阶:
你可以不使用循环或者递归，且在 O(1) 时间复杂度内解决这个问题吗？
  */
class Solution {
    /**
     * @param Integer $num
     * @return Integer
     */
    function addDigits($num) {
        $result = array_sum(str_split($num));
        if (strlen($result) == 1) {
            return $result;
        }else return $this->addDigits($result);
    }
}

$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new Solution();
$num = 38;
$res = $object->addDigits($num);
$t2 = microtime(true);
/****************************... 执行代码结束 ...****************************/
var_dump($res);
echo '<hr />';
var_dump('耗时'.round($t2-$t1,3).'秒');
echo '<hr />';
var_dump('Now memory_get_usage: ' . memory_get_usage());
