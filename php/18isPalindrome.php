<?php
/**
 * 剑指 Offer II 018. 有效的回文
难度
简单

0

收藏

分享
切换为英文
接收动态
反馈
给定一个字符串 s ，验证 s 是否是 回文串 ，只考虑字母和数字字符，可以忽略字母的大小写。

本题中，将空字符串定义为有效的 回文串 。



示例 1:

输入: s = "A man, a plan, a canal: Panama"
输出: true
解释："amanaplanacanalpanama" 是回文串
示例 2:

输入: s = "race a car"
输出: false
解释："raceacar" 不是回文串


提示：

1 <= s.length <= 2 * 105
字符串 s 由 ASCII 字符组成


注意：本题与主站 125 题相同： https://leetcode-cn.com/problems/valid-palindrome/
 */
/*
*
*/
 class Solution {

     /**
     * @param String $s
     * @return Boolean
     */
    function isPalindrome($s) {
        $array = ['a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z'];
    }
}

$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new Solution();
$s = "A man, a plan, a canal: Panama";
$res = $object->isPalindrome($s);
$t2 = microtime(true);
/****************************... 执行代码结束 ...****************************/
var_dump($res);
echo '<hr />';
var_dump('耗时'.round($t2-$t1,3).'秒');
echo '<hr />';
var_dump('Now memory_get_usage: ' . memory_get_usage());
