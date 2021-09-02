<?php
/**
 * 1876. 长度为三且各字符不同的子字符串
难度
简单

3

收藏

分享
切换为英文
接收动态
反馈
如果一个字符串不含有任何重复字符，我们称这个字符串为 好 字符串。

给你一个字符串 s ，请你返回 s 中长度为 3 的 好子字符串 的数量。

注意，如果相同的好子字符串出现多次，每一次都应该被记入答案之中。

子字符串 是一个字符串中连续的字符序列。



示例 1：

输入：s = "xyzzaz"
输出：1
解释：总共有 4 个长度为 3 的子字符串："xyz"，"yzz"，"zza" 和 "zaz" 。
唯一的长度为 3 的好子字符串是 "xyz" 。
示例 2：

输入：s = "aababcabc"
输出：4
解释：总共有 7 个长度为 3 的子字符串："aab"，"aba"，"bab"，"abc"，"bca"，"cab" 和 "abc" 。
好子字符串包括 "abc"，"bca"，"cab" 和 "abc" 。


提示：

1 <= s.length <= 100
s​​​​​​ 只包含小写英文字母。
 */
/*
*
*/
 class Solution {

     /**
     * @param String $date1
     * @param String $date2
     * @return Integer
     */
    function daysBetweenDates($date1, $date2) {
        $time1 = strtotime($date1);
        $time2 = strtotime($date2);
        if ($time1 > $time2) return ($time1 - $time2) / 86400;
        return ($time2 - $time1) / 86400;
    }
}

$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new Solution();
$date1 = "2020-01-15";
$date2 = "2019-12-31";
$res = $object->daysBetweenDates($date1, $date2);
$t2 = microtime(true);
/****************************... 执行代码结束 ...****************************/
var_dump($res);
echo '<hr />';
var_dump('耗时'.round($t2-$t1,3).'秒');
echo '<hr />';
var_dump('Now memory_get_usage: ' . memory_get_usage());
