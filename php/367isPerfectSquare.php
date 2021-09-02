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
     * @param Integer $num
     * @return Boolean
     */
    function isPerfectSquare($num) {
        $i = 1;
        while($num > 0){
           $num -= $i;
           $i += 2;
       }
       return $num == 0;
    }
}

$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new Solution();

$nums = 9;
$res = $object->isPerfectSquare($nums);
$t2 = microtime(true);
/****************************... 执行代码结束 ...****************************/
var_dump($res);
echo '<hr />';
var_dump('耗时'.round($t2-$t1,3).'秒');
echo '<hr />';
var_dump('Now memory_get_usage: ' . memory_get_usage());
