<?php
/**
 * 9. 回文数
 * 给你一个整数 x ，如果 x 是一个回文整数，返回 true ；否则，返回 false 。
 *
 * 回文数是指正序（从左向右）和倒序（从右向左）读都是一样的整数。例如，121 是回文，而 123 不是。
 * 示例 1：
 *
 * 输入：x = 121
 * 输出：true
 * 示例 2：
 *
 * 输入：x = -121
 * 输出：false
 * 解释：从左向右读, 为 -121 。 从右向左读, 为 121- 。因此它不是一个回文数。
 * 示例 3：
 *
 * 输入：x = 10
 * 输出：false
 * 解释：从右向左读, 为 01 。因此它不是一个回文数。
 * 示例 4：
 *
 * 输入：x = -101
 * 输出：false
 *
 *
 * 提示：
 *
 * -231 <= x <= 231 - 1
 *  进阶：你能不将整数转为字符串来解决这个问题吗？
 */

class Solution {

    /**
    * @param Integer $x
    * @return Boolean
    */
    function isPalindrome($x) {
        $x = (string)$x;
        // $new = '';
        // for ($i = strlen($x); $i >= 0 ; $i--)  {
        //     $new .= $x[$i];
        // }
        // if ($x == $new) return True;
        // return False;

        $new = strrev($x);
        if ($x == $new) return True;
        return False;
    }
}

$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new Solution();
$astr = '121';
$res = $object->isPalindrome($astr);
$t2 = microtime(true);
/****************************... 执行代码结束 ...****************************/
var_dump($res);
echo '<hr />';
var_dump('耗时'.round($t2-$t1,3).'秒');
echo '<hr />';
var_dump('Now memory_get_usage: ' . memory_get_usage());
