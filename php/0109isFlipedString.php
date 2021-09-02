<?php
/*
* 367. 有效的完全平方数
给定一个正整数 num，编写一个函数，如果 num 是一个完全平方数，则返回 True，否则返回 False。

说明：不要使用任何内置的库函数，如  sqrt。

示例 1：

输入：16
输出：True
示例 2：

输入：14
输出：False
  * }
  */
class Solution {
    /**
     * @param String $s1
     * @param String $s2
     * @return Boolean
     */
    function isFlipedString($s1, $s2) {
        $allString = strpos($s1 . $s1, $s2);
        return $s1 === $s2 or $allString;
    }
}

$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new Solution();

$s1 = "waterbottle";
$s2 = "erbottlewat";
$res = $object->isFlipedString($s1, $s2);
$t2 = microtime(true);
/****************************... 执行代码结束 ...****************************/
var_dump($res);
echo '<hr />';
var_dump('耗时'.round($t2-$t1,3).'秒');
echo '<hr />';
var_dump('Now memory_get_usage: ' . memory_get_usage());
