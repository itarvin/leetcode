<?php
/**
 * 1624. 两个相同字符之间的最长子字符串
难度
简单

10

收藏

分享
切换为英文
接收动态
反馈
给你一个字符串 s，请你返回 两个相同字符之间的最长子字符串的长度 ，计算长度时不含这两个字符。如果不存在这样的子字符串，返回 -1 。

子字符串 是字符串中的一个连续字符序列。



示例 1：

输入：s = "aa"
输出：0
解释：最优的子字符串是两个 'a' 之间的空子字符串。
示例 2：

输入：s = "abca"
输出：2
解释：最优的子字符串是 "bc" 。
示例 3：

输入：s = "cbzxy"
输出：-1
解释：s 中不存在出现出现两次的字符，所以返回 -1 。
示例 4：

输入：s = "cabbac"
输出：4
解释：最优的子字符串是 "abba" ，其他的非最优解包括 "bb" 和 "" 。


提示：

1 <= s.length <= 300
s 只含小写英文字母
 */
/*
*
*/
 class Solution {

     /**
     * @param String $s
     * @return Integer
     */
    function maxLengthBetweenEqualCharacters($s) {
        $len = strlen($s);
        $result = [];
        for ($i=0; $i < strlen($s); $i++) for ($j=$i + 1; $j < $len; $j++) if ($s[$i] == $s[$j]) $result[] = $j - $i  - 1;
        if (count($result)) return max($result);
        return -1;
    }
}

$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new Solution();
$s = "scayofdzca";
$res = $object->maxLengthBetweenEqualCharacters($s);
$t2 = microtime(true);
/****************************... 执行代码结束 ...****************************/
var_dump($res);
echo '<hr />';
var_dump('耗时'.round($t2-$t1,3).'秒');
echo '<hr />';
var_dump('Now memory_get_usage: ' . memory_get_usage());
