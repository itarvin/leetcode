<?php
/*
* 859. 亲密字符串
给定两个由小写字母构成的字符串 A 和 B ，只要我们可以通过交换 A 中的两个字母得到与 B 相等的结果，就返回 true ；否则返回 false 。



示例 1：

输入： A = "ab", B = "ba"
输出： true
示例 2：

输入： A = "ab", B = "ab"
输出： false
示例 3:

输入： A = "aa", B = "aa"
输出： true
示例 4：

输入： A = "aaaaaaabc", B = "aaaaaaacb"
输出： true
示例 5：

输入： A = "", B = "aa"
输出： false


提示：

0 <= A.length <= 20000
0 <= B.length <= 20000
A 和 B 仅由小写字母构成。
  * }
  */
class Solution {
    /**
     * @param String $A
     * @param String $B
     * @return Boolean
     */
    function buddyStrings($A, $B) {
        // if (strlen($A) != strlen($B)) {
        //     return false;
        // }
        // if ($A && $B) {
        //     $tempA = str_split($A);
        //     $tempB = str_split($B);
        //     foreach ($tempA as $key => $itemA) {
        //
        //     }
        // }
        //
        // $allString = strpos($A . $A, $B);
        // return $A === $B or $allString;
    }
}

$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new Solution();
$A = "abcd";
$B = "badc";
$res = $object->buddyStrings($A, $B);
$t2 = microtime(true);
/****************************... 执行代码结束 ...****************************/
var_dump($res);
echo '<hr />';
var_dump('耗时'.round($t2-$t1,3).'秒');
echo '<hr />';
var_dump('Now memory_get_usage: ' . memory_get_usage());
