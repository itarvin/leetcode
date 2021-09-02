<?php
/*
* 326. 3的幂
给定一个整数，写一个函数来判断它是否是 3 的幂次方。

示例 1:

输入: 27
输出: true
示例 2:

输入: 0
输出: false
示例 3:

输入: 9
输出: true
示例 4:

输入: 45
输出: false
进阶：
你能不使用循环或者递归来完成本题吗？
  * }
  */
class Solution {
    /**
     * @param Integer $n
     * @return Boolean
     */
    function isPowerOfThree($n) {
        if ($n == 0 || $n == 2) {
            return False;
        }
        if ($n == 1 || $n == 3) {
            return True;
        }
        if ($n) {
            if ($three = pow($n, 1/3)) {
                var_dump($three);die;
                if (pow($three, 3) == $n) {
                    return True;
                }
            }
        }
        return False;
    }
}

$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new Solution();

$n = 81;
$res = $object->isPowerOfThree($n);
$t2 = microtime(true);
/****************************... 执行代码结束 ...****************************/
var_dump($res);
echo '<hr />';
var_dump('耗时'.round($t2-$t1,3).'秒');
echo '<hr />';
var_dump('Now memory_get_usage: ' . memory_get_usage());
