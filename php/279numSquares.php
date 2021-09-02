<?php
/*
* 279. 完全平方数
给定正整数 n，找到若干个完全平方数（比如 1, 4, 9, 16, ...）使得它们的和等于 n。你需要让组成和的完全平方数的个数最少。

示例 1:

输入: n = 12
输出: 3
解释: 12 = 4 + 4 + 4.
示例 2:

输入: n = 13
输出: 2
解释: 13 = 4 + 9.
  */
class Solution {
    /**
     * @param Integer $n
     * @return Integer
     */
    function numSquares($n) {
        $result = range(0, $n);
        for ($i = 1; $i <= $n; $i++) {
            for ($j = 1; $i - $j * $j >= 0; $j++) {
                $result[$i] = min($result[$i], $result[$i - $j * $j]+1);//这里+1
            }
        }
        return $result[$n];
    }
}

$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new Solution();

$n = 12;
$res = $object->numSquares($n);
$t2 = microtime(true);
/****************************... 执行代码结束 ...****************************/
var_dump($res);
echo '<hr />';
var_dump('耗时'.round($t2-$t1,3).'秒');
echo '<hr />';
var_dump('Now memory_get_usage: ' . memory_get_usage());
