<?php
/*
* 386. 字典序排数
给定一个整数 n, 返回从 1 到 n 的字典顺序。

例如，

给定 n =1 3，返回 [1,10,11,12,13,2,3,4,5,6,7,8,9] 。

请尽可能的优化算法的时间复杂度和空间复杂度。 输入的数据 n 小于等于 5,000,000。
  */
class Solution {
    /**
     * @param Integer $n
     * @return Integer[]
     */
    function lexicalOrder($n) {
        $num = range(1, $n);
        sort($num, SORT_STRING);
        return $num;
    }
}
$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new Solution();

$n = 13;
$res = $object->lexicalOrder($n);
$t2 = microtime(true);
/****************************... 执行代码结束 ...****************************/
var_dump($res);
echo '<hr />';
var_dump('耗时'.round($t2-$t1,3).'秒');
echo '<hr />';
var_dump('Now memory_get_usage: ' . memory_get_usage());
