<?php
/**
 * 给你一个整数 n ，请你判断 n 是否为 丑数 。如果是，返回 true ；否则，返回 false 。

 * 丑数 就是只包含质因数 2、3 和/或 5 的正整数。
 * 示例 1：
 * 输入：n = 6
 * 输出：true
 * 解释：6 = 2 × 3
 * 示例 2：
 * 输入：n = 8
 * 输出：true
 * 解释：8 = 2 × 2 × 2
 * 示例 3：
 * 输入：n = 14
 * 输出：false
 * 解释：14 不是丑数，因为它包含了另外一个质因数 7 。
 * 示例 4：
 * 输入：n = 1
 * 输出：true
 * 解释：1 通常被视为丑数。
 * 提示：
 * -231 <= n <= 231 - 1
 * 来源：力扣（LeetCode）
 * 链接：https://leetcode-cn.com/problems/ugly-number
 * 著作权归领扣网络所有。商业转载请联系官方授权，非商业转载请注明出处。
 */
/*
*
*/
class Solution {

    /**
     * @param Integer $n
     * @return Boolean
     */
    function isUgly($n) {
        while ($n > 1) {
            if (!($n % 2) || !($n % 3) || !($n % 5)){
                if (!($n % 2)) {
                    $n /= 2;
                }else if (!($n % 3)) {
                    $n /= 3;
                }else if(!($n % 5)) {
                    $n /= 5;
                }
            }else {
                return False;
            }
        }
        // if ($n == 1) return True;
        // if ($n /= 2 || $n /= 5 || $n /= 3) return True;
        // return False;
    }
}

$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new Solution();
$n = 6;
$res = $object->isUgly($n);
$t2 = microtime(true);
/****************************... 执行代码结束 ...****************************/
var_dump($res);
echo '<hr />';
var_dump('耗时'.round($t2-$t1,3).'秒');
echo '<hr />';
var_dump('Now memory_get_usage: ' . memory_get_usage());
