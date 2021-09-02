<?php
/*
* 1668. 最大重复子字符串
难度
简单

14

收藏

分享
切换为英文
接收动态
反馈
给你一个字符串 sequence ，如果字符串 word 连续重复 k 次形成的字符串是 sequence 的一个子字符串，那么单词 word 的 重复值为 k 。单词 word 的 最大重复值 是单词 word 在 sequence 中最大的重复值。如果 word 不是 sequence 的子串，那么重复值 k 为 0 。

给你一个字符串 sequence 和 word ，请你返回 最大重复值 k 。



示例 1：

输入：sequence = "ababc", word = "ab"
输出：2
解释："abab" 是 "ababc" 的子字符串。
示例 2：

输入：sequence = "ababc", word = "ba"
输出：1
解释："ba" 是 "ababc" 的子字符串，但 "baba" 不是 "ababc" 的子字符串。
示例 3：

输入：sequence = "ababc", word = "ac"
输出：0
解释："ac" 不是 "ababc" 的子字符串。


提示：

1 <= sequence.length <= 100
1 <= word.length <= 100
sequence 和 word 都只包含小写英文字母。
  */
class Solution {

    /**
     * @param String $sequence
     * @param String $word
     * @return Integer
     */
    function maxRepeating($sequence, $word) {
        $count = ceil(strlen($sequence) / strlen($word));
        $result = [0];
        for ($i=1; $i <= $count; $i++) if (strpos($sequence, str_repeat($word, $i)) !== false) $result[] = $i;
        return max($result);
    }
}

$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new Solution();
$sequence = "aaa";
$word = "a";
$res = $object->maxRepeating($sequence, $word);
$t2 = microtime(true);
/****************************... 执行代码结束 ...****************************/
var_dump($res);
echo '<hr />';
var_dump('耗时'.round($t2-$t1,3).'秒');
echo '<hr />';
var_dump('Now memory_get_usage: ' . memory_get_usage());
