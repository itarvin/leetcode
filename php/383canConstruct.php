<?php
/**
 * 383. 赎金信
难度
简单

164

收藏

分享
切换为英文
接收动态
反馈
给定一个赎金信 (ransom) 字符串和一个杂志(magazine)字符串，判断第一个字符串 ransom 能不能由第二个字符串 magazines 里面的字符构成。如果可以构成，返回 true ；否则返回 false。

(题目说明：为了不暴露赎金信字迹，要从杂志上搜索各个需要的字母，组成单词来表达意思。杂志字符串中的每个字符只能在赎金信字符串中使用一次。)



示例 1：

输入：ransomNote = "a", magazine = "b"
输出：false
示例 2：

输入：ransomNote = "aa", magazine = "ab"
输出：false
示例 3：

输入：ransomNote = "aa", magazine = "aab"
输出：true


提示：

你可以假设两个字符串均只含有小写字母。
 */
/*
*
*/
 class Solution {

    /**
     * @param String $ransomNote
     * @param String $magazine
     * @return Boolean
     */
    function canConstruct($ransomNote, $magazine) {
        $ransom_ = array_count_values(str_split($ransomNote));
        $magazine_ = array_count_values(str_split($magazine));
        foreach ($ransom_ as $key => $item) {
            $target = $magazine_[$key];
            if (!$target || $target < $item) return False;
        }
        return True;
    }
}

$t1 = microtime(true);
/****************************... 执行代码开始 ...****************************/
$object = new Solution();
$ransomNote = "aa";
$magazine = "ab";
$res = $object->canConstruct($ransomNote, $magazine);
$t2 = microtime(true);
/****************************... 执行代码结束 ...****************************/
var_dump($res);
echo '<hr />';
var_dump('耗时'.round($t2-$t1,3).'秒');
echo '<hr />';
var_dump('Now memory_get_usage: ' . memory_get_usage());
