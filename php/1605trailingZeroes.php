<?php
/**
 * 面试题 16.05. 阶乘尾数
难度
简单

48

收藏

分享
切换为英文
接收动态
反馈
设计一个算法，算出 n 阶乘有多少个尾随零。

示例 1:

输入: 3
输出: 0
解释: 3! = 6, 尾数中没有零。
示例 2:

输入: 5
输出: 1
解释: 5! = 120, 尾数中有 1 个零.
说明: 你算法的时间复杂度应为 O(log n) 。
 */
/*
*
*/
 class Solution {

     /**
      * @param Integer $n
      * @return Integer
      */
    function trailingZeroes($n) {
        $res = 0;
        while($n > 0){
            $tmp = intval($n / 5);
            var_dump($tmp, '45');
            $res += $tmp;
            $n = $tmp;
        }
        return $res;

        // $factorial = 1;
        // for ($i=1; $i <= $n; $i++) $factorial = bcmul($factorial, $i);
        // // var_dump($factorial);
        // // $division = bcdiv(, 10);
        // // $division = strrev($factorial);
        // var_dump(bcmod($factorial, 10));die;
        // return strlen($factorial) - strlen($division);
        // $resRev = strrev($res);
        // $num = 0;
        // for ($i=0; $i < strlen($resRev); $i++) {
        //     if ($resRev[$i] != 0)  break;
        //     $num += 1;
        // }
        // return $num;
    }
}

$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new Solution();
$n = 3371;
$res = $object->trailingZeroes($n);
$t2 = microtime(true);
/****************************... 执行代码结束 ...****************************/
var_dump($res);
echo '<hr />';
var_dump('耗时'.round($t2-$t1,3).'秒');
echo '<hr />';
var_dump('Now memory_get_usage: ' . memory_get_usage());
