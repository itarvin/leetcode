<?php
/*
* 231. 2的幂
给定一个整数，编写一个函数来判断它是否是 2 的幂次方。

示例 1:

输入: 1
输出: true
解释: 20 = 1
示例 2:

输入: 16
输出: true
解释: 24 = 16
示例 3:

输入: 218
输出: false
  * }
  */
class Solution {
    /**
     * @param Integer $n
     * @return Boolean
     */
    function isPowerOfTwo($n) {
        // 对半开，限制上限
        for ($i=0; $i <= ceil(sqrt($n)); $i++) {
            if (pow(2, $i) == $n) {
                return true;
            }
        }
        return false;
    }
}

$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new Solution();

$n = 16;
$res = $object->isPowerOfTwo($n);
$t2 = microtime(true);
/****************************... 执行代码结束 ...****************************/
var_dump($res);
echo '<hr />';
var_dump('耗时'.round($t2-$t1,3).'秒');
echo '<hr />';
var_dump('Now memory_get_usage: ' . memory_get_usage());
