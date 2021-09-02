<?php
/**
 * 1446. 连续字符
难度
简单

19

收藏

分享
切换为英文
接收动态
反馈
给你一个字符串 s ，字符串的「能量」定义为：只包含一种字符的最长非空子字符串的长度。

请你返回字符串的能量。



示例 1：

输入：s = "leetcode"
输出：2
解释：子字符串 "ee" 长度为 2 ，只包含字符 'e' 。
示例 2：

输入：s = "abbcccddddeeeeedcba"
输出：5
解释：子字符串 "eeeee" 长度为 5 ，只包含字符 'e' 。
示例 3：

输入：s = "triplepillooooow"
输出：5
示例 4：

输入：s = "hooraaaaaaaaaaay"
输出：11
示例 5：

输入：s = "tourist"
输出：1


提示：

1 <= s.length <= 500
s 只包含小写英文字母。
 */
/*
*
*/
 class Solution {

    /**
    * @param String $s
    * @return Integer
    */
    function maxPower($s) {
        $result = [];
        $start = $s[0];
        $num = 1;
        for ($i=0; $i < strlen($s); $i++) {
            $next = $s[$i+1];
            if ($start != $next) {
                $result[] = $num;
                $num = 1;
                $start = $next;
            }else{
                $num += 1;
            }
            if ($i == strlen($s) - 1) $result[] = $num;
        }
        return max($result);
    }
}

$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new Solution();
$S = "hooraaaaaaaaaaay";
$res = $object->maxPower($S);
$t2 = microtime(true);
/****************************... 执行代码结束 ...****************************/
var_dump($res);
echo '<hr />';
var_dump('耗时'.round($t2-$t1,3).'秒');
echo '<hr />';
var_dump('Now memory_get_usage: ' . memory_get_usage());
