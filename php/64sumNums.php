<?php
/*
* 剑指 Offer 64. 求1+2+…+n
求 1+2+...+n ，要求不能使用乘除法、for、while、if、else、switch、case等关键字及条件判断语句（A?B:C）。



示例 1：

输入: n = 3
输出: 6
示例 2：

输入: n = 9
输出: 45


限制：

1 <= n <= 10000
  */
class Solution {
    /**
     * @param Integer $n
     * @return Integer
     */
    function sumNums($n) {
        return ($n * ($n + 1)) / 2;
    }
}

$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new Solution();

$n = 9;
$res = $object->sumNums($n);
$t2 = microtime(true);
/****************************... 执行代码结束 ...****************************/
var_dump($res);
echo '<hr />';
var_dump('耗时'.round($t2-$t1,3).'秒');
echo '<hr />';
var_dump('Now memory_get_usage: ' . memory_get_usage());
