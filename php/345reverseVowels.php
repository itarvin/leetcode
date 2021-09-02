<?php
/**
 * 345. 反转字符串中的元音字母
难度
简单

213

收藏

分享
切换为英文
接收动态
反馈
给你一个字符串 s ，仅反转字符串中的所有元音字母，并返回结果字符串。

元音字母包括 'a'、'e'、'i'、'o'、'u'，且可能以大小写两种形式出现。



示例 1：

输入：s = "hello"
输出："holle"
示例 2：

输入：s = "leetcode"
输出："leotcede"


提示：

1 <= s.length <= 3 * 105
s 由 可打印的 ASCII 字符组成
 */
/*
*
*/
 class Solution {

     /**
     * @param String $s
     * @return String
     */
    function reverseVowels($s) {
        $len = strlen($s);
        $vowels = ['a','e','i','o','u','A','E','I','O','U'];
        for ($i=0; $i < $len; $i++) {
            $left = $s[$i];
            for ($j=0; $j < $len; $j++) {
                $right = $s[$len - $j];
                if (in_array(strtolower($left), $vowels) && in_array(strtolower($right), $vowels) && ($left !== $right)) {
                    $s[$j] = $left;
                    $s[$i] = $right;
                    break 2;
                }elseif ($s[$i] == $s[$j]) break;
            }
        }
        return $s;
    }
}

$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new Solution();
$s = "leetcode";
$res = $object->reverseVowels($s);
$t2 = microtime(true);
/****************************... 执行代码结束 ...****************************/
var_dump($res);
echo '<hr />';
var_dump('耗时'.round($t2-$t1,3).'秒');
echo '<hr />';
var_dump('Now memory_get_usage: ' . memory_get_usage());
