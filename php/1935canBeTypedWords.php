<?php
/**
 *1935. 可以输入的最大单词数
难度
简单

3

收藏

分享
切换为英文
接收动态
反馈
键盘出现了一些故障，有些字母键无法正常工作。而键盘上所有其他键都能够正常工作。

给你一个由若干单词组成的字符串 text ，单词间由单个空格组成（不含前导和尾随空格）；另有一个字符串 brokenLetters ，由所有已损坏的不同字母键组成，返回你可以使用此键盘完全输入的 text 中单词的数目。



示例 1：

输入：text = "hello world", brokenLetters = "ad"
输出：1
解释：无法输入 "world" ，因为字母键 'd' 已损坏。
示例 2：

输入：text = "leet code", brokenLetters = "lt"
输出：1
解释：无法输入 "leet" ，因为字母键 'l' 和 't' 已损坏。
示例 3：

输入：text = "leet code", brokenLetters = "e"
输出：0
解释：无法输入任何单词，因为字母键 'e' 已损坏。


提示：

1 <= text.length <= 104
0 <= brokenLetters.length <= 26
text 由若干用单个空格分隔的单词组成，且不含任何前导和尾随空格
每个单词仅由小写英文字母组成
brokenLetters 由 互不相同 的小写英文字母组成
 */
/*
*
*/
class Solution {

    /**
     * @param String $text
     * @param String $brokenLetters
     * @return Integer
     */
    function canBeTypedWords($text, $brokenLetters) {
        $brokenArr = str_split($brokenLetters);
        $nums = 0;
        foreach (explode(" ", $text) as $key => $item) if (count(array_intersect(str_split($item), $brokenArr)) == 0) $nums += 1;
        return $nums;
    }
}

$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new Solution();
$text = "hello world";
$brokenLetters = "ad";
$res = $object->canBeTypedWords($text, $brokenLetters);
$t2 = microtime(true);
/****************************... 执行代码结束 ...****************************/
var_dump($res);
echo '<hr />';
var_dump('耗时'.round($t2-$t1,3).'秒');
echo '<hr />';
var_dump('Now memory_get_usage: ' . memory_get_usage());
