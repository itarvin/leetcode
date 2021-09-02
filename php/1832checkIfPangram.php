<?php
/**
 * 1832. 判断句子是否为全字母句
难度
简单

9

收藏

分享
切换为英文
接收动态
反馈
全字母句 指包含英语字母表中每个字母至少一次的句子。

给你一个仅由小写英文字母组成的字符串 sentence ，请你判断 sentence 是否为 全字母句 。

如果是，返回 true ；否则，返回 false 。



示例 1：

输入：sentence = "thequickbrownfoxjumpsoverthelazydog"
输出：true
解释：sentence 包含英语字母表中每个字母至少一次。
示例 2：

输入：sentence = "leetcode"
输出：false


提示：

1 <= sentence.length <= 1000
sentence 由小写英语字母组成
 */
/*
*
*/
 class Solution {

     /**
     * @param String $sentence
     * @return Boolean
     */
    function checkIfPangram($sentence) {
        if (count(array_count_values(str_split($sentence))) == 26) return True;
        return False;
    }
}

$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new Solution();
$allowed = "ab";
$sentence = "thequickbrownfoxjumpsoverthelazydog";
$res = $object->checkIfPangram($sentence);
$t2 = microtime(true);
/****************************... 执行代码结束 ...****************************/
var_dump($res);
echo '<hr />';
var_dump('耗时'.round($t2-$t1,3).'秒');
echo '<hr />';
var_dump('Now memory_get_usage: ' . memory_get_usage());
