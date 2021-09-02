<?php
/*
* 1281. 整数的各位积和之差
给你一个整数 n，请你帮忙计算并返回该整数「各位数字之积」与「各位数字之和」的差。



示例 1：

输入：n = 234
输出：15
解释：
各位数之积 = 2 * 3 * 4 = 24
各位数之和 = 2 + 3 + 4 = 9
结果 = 24 - 9 = 15
示例 2：

输入：n = 4421
输出：21
解释：
各位数之积 = 4 * 4 * 2 * 1 = 32
各位数之和 = 4 + 4 + 2 + 1 = 11
结果 = 32 - 11 = 21


提示：

1 <= n <= 10^5
  * }
  */
class Solution {
    /**
     * @param Integer $n
     * @return Integer
     */
    function subtractProductAndSum($n) {
        if (!$n) {
            return 1;
        }
        $nArr = str_split($n);
        return  array_product($nArr) - array_sum($nArr);
    }
}

$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new Solution();

$n = 234;
$res = $object->subtractProductAndSum($n);
$t2 = microtime(true);
/****************************... 执行代码结束 ...****************************/
var_dump($res);
echo '<hr />';
var_dump('耗时'.round($t2-$t1,3).'秒');
echo '<hr />';
var_dump('Now memory_get_usage: ' . memory_get_usage());
